<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;
use Illuminate\Support\Facades\Mail;
use App\Product;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Bill;

class CartController extends Controller
{

    public function AddCart($id){
        $Product = Product::find($id);
        Cart::add(array(
            'id'=>$id,
            'name'=>$Product->name,
            'qty'=>1,
            'price'=>$Product->price_unit,
            'options'=>array(
                'img'=>$Product->image1)
            ));
        return redirect('show');
    }
    public function ShowCart(){
        $brand = DB::table('brand')->get();
        $category = DB::table('category')->get();
        $total = Cart::total();
        $items = Cart::content();
       return view('frontend.pages.cart',compact('category','items','total','brand'));
    }
    public function UpdateCart(Request $req){
        Cart::update($req->rowId,$req->qty);
    }
    public function DeleteCart($id){
        if($id == 'all'){
            Cart::destroy();
        }
        else{
            Cart::remove($id);
        }
        return back();
    }
    public function checkout(Request $req){
        $id_user = Auth::user()->id;
        $items = Cart::content();
        foreach($items as $key){
            $bill = new Bill();

                $bill ->id_user = $id_user;
                $bill ->product_id = $key->id;
                $bill ->name_user = $req->name;
                $bill ->email = $req->email;
                $bill ->phone = $req->phone;
                $bill ->address = $req->add;
                $bill ->date_order = Carbon::now();
                $bill ->total = $key->price*$key->qty;
                $bill ->qty = $key->qty;
                $bill ->created_at = Carbon::now();
                $bill ->updated_at = Carbon::now();
            $bill->save();
        
        }
        return redirect('email');
    }

    public function email(Request $req){
        $brand = DB::table('brand')->get();
        $category = DB::table('category')->get();
        $id_user = Auth::user()->id;
        $items = Cart::content();
        $total = Cart::total();
        $bill = DB::table('bill')->where('id_user',$id_user)->orderBy('mhd','desc')->limit(1)->get();
        return view('frontend.pages.email',compact('items','bill','total','category','brand'));
    }
}
