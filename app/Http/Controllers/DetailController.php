<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
class DetailController extends Controller
{
    public function getdetail($id){
        $brand = DB::table('brand')->get();
        $category = DB::table('category')->limit(7)->get();
        $view = Product::findOrfail($id);
        $view->views += '1';
        $view->save();
        $product = DB::table('product')->where('id',$id)->get();
        $product_info = DB::table('product')->join('info','product.id','info.product_id')
        ->where('product_id',$id)->get();
        $product_post = DB::table('product')->join('type','product.id','type.product_id')
        ->where('product_id',$id)->get();
        return view('frontend.pages.details',compact('product','category','brand','product_info','product_post'));
    }
}
