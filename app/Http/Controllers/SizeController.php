<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller
{
    public function add_size(){
        if(Auth::check()){
            return view('backend.pages.add_size');
        }
        else{
            return redirect('admin');
        }

    }
    public function save_size(Request $req){
        $data = array();
        $data['name'] = $req->GB;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;
 
        DB::table('size')->insert($data);

        return redirect('all-size')->with('message', 'Thêm thành công');
    }
    public function all_size(){
        if(Auth::check()){
            $size = DB::table('size')->get();
            return view('backend.pages.all_size',compact('size'));
        }
        else{
            return redirect('admin');
        }

    }
    public function edit_size($id){
        if(Auth::check()){
            $size = DB::table('size')->where('id',$id)->get();
            return view('backend.pages.edit_size',compact('size'));
        }
        else{
            return redirect('admin');
        }

    }
    public function update_size($id, Request $req){
        if(Auth::check()){
            $data = array();
            $data['name'] = $req->GB;
            $data['updated_at'] = Carbon::now();
    
            DB::table('size')->where('id',$id)->update($data);
    
            return   redirect('all-size')->with('message', 'Sửa thành công');
        }
        else{
            return redirect('admin');
        }

    }
    public function detete_size($id){

        DB::table('size')->where('id',$id)->delete();

        return redirect('list-category')->with('message', 'Xoá thành công');
    } 
}
