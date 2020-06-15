<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index(){
        return view('backend.login');
    }
    public function login(Request $req){
        $email = $req->Email;
        $pass = md5($req->Password) ;
        
        Auth::attempt((['email'=>$email, 'password'=>$pass,'status'=>1]));

        return redirect('dashboad');

    }
    public function logout(){
        Auth::logout();
       return redirect('admin');
    }
    public function dashboad(){
        return view('backend.main');
    }
}
