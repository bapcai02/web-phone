<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    public function __construct()
    {
        $category = DB::table('category')->limit(7)->get();
        View::share('category', $category);
    }
    public function index(){
        $category = DB::table('category')->limit(7)->get();
        $product_hot = DB::table('product')->orderBy('price_promotion','desc')->limit(8)->get();
        $product_new = DB::table('product')->orderBy('id','desc')->limit(8)->get();
        $product_watch = DB::table('product')->where('category_id','3')->orderBy('price_promotion','desc')->limit(4)->get();
        $product_accessories = DB::table('product')->where('category_id','6')->orderBy('price_promotion','desc')->limit(4)->get();
        return view('frontend.pages.index',compact('category','product_hot','product_new','product_watch','product_accessories'));
    }
    public function search(Request $req){

        $key = $req->search;

        $search = DB::table('product')->where('name','like',$key)
        ->orderBy('id','desc')->limit(8)->get();
        return view('frontend.pages.search',compact('search'));
    }
}
