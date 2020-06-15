<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Categories;
class Category extends Controller
{
    public function add_category(){
        return view('backend.pages.add_category');
    }
    public function save_category(Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status']= $req->status;
        $data['created_at'] = Carbon::now();
        $data['update_at'] = NULL;
        
        DB::table('category')->insert($data);

        return redirect('list-category')->with('message', 'Thêm thành công');
    }
    public function all_category(){
        $category = DB::table('category')->get();
        return view('backend.pages.all_category',compact('category'));
    }
    public function edit_category($id){
        $category = DB::table('category')->where('id',$id)->get();
        return view('backend.pages.edit_category',compact('category'));
    }
    public function update_category($id, Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status']= $req->status;
        $data['updated_at'] = Carbon::now();

        DB::table('category')->where('id',$id)->update($data);

        return   redirect('list-category')->with('message', 'Sửa thành công');
    }
    public function detete_category($id){

        $news = Categories::find($id);
        $news->delete();

        return redirect('list-category')>with('message', 'Xoá thành công');;
    }
}
