<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Categories;
use Illuminate\Support\Facades\Auth;
class Category extends Controller
{
    public function add_category(){
        if(Auth::check()){
            return view('backend.pages.add_category');
        }
        else{
            return redirect('admin');
        }
        
    }
    public function save_category(Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status']= $req->status;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;
        
        DB::table('category')->insert($data);

        return redirect('list-category')->with('message', 'Thêm thành công');
    }
    public function all_category(){
        if(Auth::check()){
            $category = DB::table('category')->get();
            return view('backend.pages.all_category',compact('category'));
        }
        else{
            return redirect('admin');
        }

    }
    public function edit_category($id){
        if(Auth::check()){
            $category = DB::table('category')->where('id',$id)->get();
            return view('backend.pages.edit_category',compact('category'));
        }
        else{
            return redirect('admin');
        }

    }
    public function update_category($id, Request $req){
        if(Auth::check()){
            $data = array();
            $data['name'] = $req->name;
            $data['desc'] = $req->desc;
            $data['status']= $req->status;
            $data['updated_at'] = Carbon::now();
    
            DB::table('category')->where('id',$id)->update($data);
    
            return   redirect('list-category')->with('message', 'Sửa thành công');
        }
        else{
            return redirect('admin');
        }

    }
    public function detete_category($id){

        $news = Categories::find($id);
        $news->delete();

        return redirect('list-category')->with('message', 'Xoá thành công');
    }

    public function getcatgory($id){
        $cate = DB::table('category')->where('id',$id)->get();
        $brand = DB::table('brand')->get();
        $categories = DB::table('category')->join('product','category.id','product.category_id')
        ->where('category_id',$id)->orderBy('category_id','desc')->paginate(8);
        $category = DB::table('category')->get();
        return view('frontend.pages.category',compact('category','categories','cate','brand'));
    }
}
