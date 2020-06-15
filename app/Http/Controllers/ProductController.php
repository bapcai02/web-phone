<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function all_product(){
        $product = DB::table('product')->get();

        return view('backend.pages.all_product',compact('product'));
    }
    public function add_product(){
        return view('backend.pages.add_product');
    }
    public function save_product(Request $req){

        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status'] = $req->status;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;

        DB::table('product')->insert($data);

       return redirect('all-product')->with('message','Thêm thương hiệu thành công');

    }
    public function edit_product($id){
        $brand = DB::table('product')->where('id',$id)->get();
        return view('backend.pages.edit_product',compact('product'));
    }
    public function update_product($id, Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status']= $req->status;
        $data['updated_at'] = Carbon::now();

        DB::table('product')->where('id',$id)->update($data);

        return   redirect('all-product')->with('message', 'Sửa thành công');
    }
    public function detete_product($id){
        DB::table('product')->where('id',$id)->delete();

        return redirect('all-product')>with('message', 'Xoá thành công');;
    }
}
