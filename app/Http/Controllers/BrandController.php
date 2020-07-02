<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
class BrandController extends Controller
{
    public function all_brand(){
        if(Auth::check()){
            $brand = DB::table('brand')->get();

            return view('backend.pages.all_brand',compact('brand'));
        }
        else{
            return redirect('admin');
        }
    }
    public function add_brand(){
        if(Auth::check()){
            return view('backend.pages.add_brand');
        }
        else{
            return redirect('admin');
        }       
    }
    public function save_brand(Request $req){

        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status'] = $req->status;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;

        DB::table('brand')->insert($data);

       return redirect('all-brand')->with('message','Thêm thương hiệu thành công');

    }
    public function edit_brand($id){
        if(Auth::check()){
            $brand = DB::table('brand')->where('id',$id)->get();
            return view('backend.pages.edit_brand',compact('brand'));
        }
        else{
            return redirect('admin');
        }
        
    }
    public function update_brand($id, Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status']= $req->status;
        $data['updated_at'] = Carbon::now();

        DB::table('brand')->where('id',$id)->update($data);

        return   redirect('all-brand')->with('message', 'Sửa thành công');
    }
    public function detete_brand($id){
        DB::table('brand')->where('id',$id)->delete();

        return redirect('all-brand')>with('message', 'Xoá thành công');;
    }

}
