<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SizeController extends Controller
{
    public function add_size(){
        return view('backend.pages.add_size');
    }
    public function save_size(Request $req){
        $data = array();
        $data['name'] = $req->GB;
        $data['price_percent'] = $req->price_percent;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;
 
        DB::table('size')->insert($data);

        return redirect('all-size')->with('message', 'Thêm thành công');
    }
    public function all_size(){
        $size = DB::table('size')->get();
        return view('backend.pages.all_size',compact('size'));
    }
    public function edit_size($id){
        $size = DB::table('size')->where('id',$id)->get();
        return view('backend.pages.edit_size',compact('size'));
    }
    public function update_size($id, Request $req){
        $data = array();
        $data['name'] = $req->GB;
        $data['price_percent'] = $req->price_percent;
        $data['updated_at'] = Carbon::now();

        DB::table('size')->where('id',$id)->update($data);

        return   redirect('all-size')->with('message', 'Sửa thành công');
    }
    public function detete_size($id){

        DB::table('size')->where('id',$id)->delete();

        return redirect('list-category')>with('message', 'Xoá thành công');;
    } 
}
