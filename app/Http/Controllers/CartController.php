<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;
use Illuminate\Support\Facades\Mail;
use App\Product;
use Illuminate\Mail\Mailer;

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
        
        $items = Cart::content();
        foreach($items as $key){
            DB::table('bill')->insert([
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
        // $to_name = "CUA HANG DIEN THOAI";
        // $to_email = "hieuchance2018@gmail.com";//send to this email
        
        // $data = array("name"=>"noi dung ten","body"=>"noi dung body"); //body of mail.blade.php
        
        // Mail::send("frontend.pages.send_mail",$data,function($message) use ($to_name,$to_email){
        // $message->to($to_email)->subject('test mail nhé');//send this mail with subject
        // $message->from($to_email,$to_name);//send from this mail
        // });

        $category = DB::table('category')->get();
        $items = Cart::content();
        $total = Cart::total();
        $bill = DB::table('bill')->orderBy('mhd','desc')->limit(1)->get();
        return view('frontend.pages.email',compact('items','bill','total','category'));
    }
}
