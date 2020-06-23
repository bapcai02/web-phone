<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function getdetail($id){
        $category = DB::table('category')->limit(7)->get();
        $product = DB::table('product')->where('id',$id)->get();
        $product_info = DB::table('product')->join('info','product.id','info.product_id')
        ->where('product_id',$id)->get();
        return view('frontend.pages.details',compact('product','category','product_info'));
    }
}
