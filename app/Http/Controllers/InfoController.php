<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function all_info(){
        $info = DB::table('info')->get();

        return view('backend.pages.all_info',compact('info'));
    }
    public function add_info(){
        $product = DB::table('product')->get();
        return view('backend.pages.add_info',compact('product'));
    }
    public function save_info(Request $req){

        $data = array();
        $data['product_id'] = $req->product_id;
        $data['weight'] = $req->weigh;
        $data['size'] = $req->size;
        $data['sim'] = $req->sim;
        $data['size'] = $req->size;
        $data['screen'] = $req->screen;
        $data['chip_cpu'] = $req->chip;
        $data['pin'] = $req->pin;
        $data['camera_before'] = $req->camera_before;
        $data['camera_after'] = $req->camera_after;
        $data['video'] = $req->video;
        $data['status'] = $req->status;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;

        DB::table('info')->insert($data);

       return redirect('all-info')->with('message','Thêm thành công');

    }
    public function edit_info($id){
        $info = DB::table('info')->where('id',$id)->get();
        return view('backend.pages.edit_info',compact('info'));
    }
    public function update_info($id, Request $req){
        $data = array();
        $data['weight'] = $req->weigh;
        $data['size'] = $req->size;
        $data['sim'] = $req->sim;
        $data['size'] = $req->size;
        $data['screen'] = $req->screen;
        $data['chip_cpu'] = $req->chip;
        $data['pin'] = $req->pin;
        $data['camera_before'] = $req->camera_before;
        $data['camera_after'] = $req->camera_after;
        $data['video'] = $req->video;
        $data['status'] = $req->status;
        $data['updated_at'] = Carbon::now();

        DB::table('info')->where('id',$id)->update($data);

        return  redirect('all-info')->with('message', 'Sửa thành công');
    }
    public function detete_brand($id){
        DB::table('info')->where('id',$id)->delete();

        return redirect('all-info')>with('message', 'Xoá thành công');;
    }

}
