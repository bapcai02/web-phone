<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class TypeController extends Controller
{
    public function all_type(){
        if(Auth::check()){
            $type = DB::table('type')->join('product','type.product_id','product.id')->orderBy('product_id','desc')->paginate(5);
            return view('backend.pages.all_type',compact('type'));
        }
        else{
            return redirect('admin');
        }
    }
    public function add_type(){
        if(Auth::check()){
            $product = DB::table('product')->get();
            return view('backend.pages.add_type',compact('product'));
        }
        else{
            return redirect('admin');
        }
    }
    public function save_type(Request $request){
        $data = array();
        $data['product_id'] = $request->product;
        $data['posts'] = $request->posts;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;
    
        DB::table('type')->insert($data);

        return redirect('all-type')->with('message', 'Thêm thành công');
    }
    public function edit_type($id){
        if(Auth::check()){

            $type = DB::table('type')->join('product','type.product_id','product.id')->where('product_id',$id)->get();
            return view('backend.pages.edit_type',compact('type'));
        }
        else{
            return redirect('admin');
        }
    }
    public function update_size($id, Request $req){
        if(Auth::check()){
            $data = array();
            $data['product_id'] = $req->product;
            $data['posts'] = $req->posts;
            $data['updated_at'] = Carbon::now();
    
            DB::table('type')->where('id',$id)->update($data);
    
            return   redirect('all-type')->with('message', 'Sửa thành công');
        }
        else{
            return redirect('admin');
        }

    }
}
