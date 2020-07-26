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
        
        $category = DB::table('category')->get();
        $total = Cart::total();
        $items = Cart::content();
       return view('frontend.pages.cart',compact('category','items','total'));
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
            DB::table('bill')->insert([
                'id_user' => $id_user,
                'product_id' => $key->id,
                'name_user' => $req->name,
                'email' => $req->email,
                'phone' => $req->phone,
                'address' => $req->add,
                'date_order' => Carbon::now(),
                'total' => $key->price*$key->qty,
                'qty' =>$key->qty,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        return redirect('email');
        }
    }

    public function email(Request $req){

        $category = DB::table('category')->get();
        $id_user = Auth::user()->id;
        $items = Cart::content();
        $total = Cart::total();
        $bill = DB::table('bill')->where('id_user',$id_user)->orderBy('mhd','desc')->limit(1)->get();
        return view('frontend.pages.email',compact('items','bill','total','category'));
    }
}
