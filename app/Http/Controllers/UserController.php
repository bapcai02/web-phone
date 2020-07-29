<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function add_user(){
        return view('backend.pages.add_user');
    }
    public function save_user(Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] = Crypt::encryptString($req->password) ;
        $data['status'] = '0';
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;
 
        DB::table('users')->insert($data);

        return redirect('all-user')->with('message', 'Thêm thành công');
    }
    public function all_user(){
        $user = DB::table('users')->get();
        return view('backend.pages.all_user',compact('user'));
    }
    public function edit_user($id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('backend.pages.edit_user',compact('user'));
    }
    public function update_user($id, Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] = Crypt::encryptString($req->password) ;
        $data['status'] = $req->status;
        $data['updated_at'] = Carbon::now();

        DB::table('users')->where('id',$id)->update($data);

        return   redirect('all-user')->with('message', 'Sửa thành công');
    }
    public function detete_user($id){

        DB::table('users')->where('id',$id)->delete();

        return redirect('all-user')->with('message', 'Xoá thành công');;
    } 
}
