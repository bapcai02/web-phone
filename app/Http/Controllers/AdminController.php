<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index(){
        
        return view('backend.login');
    }
    public function login(Request $req){
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:5'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
        ];
        $validator = Validator::make($req->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('admin')->withErrors($validator)->withInput();
        }
        else{
            $email = $req->input('email');
            $password = ($req->input('password'));
            $status = "1";
            if(Auth::attempt((['email'=>$email, 'password'=>$password,'status'=>$status]))){
                return redirect('dashboad');
               
            }
            else{
                return redirect('admin')->with('message','tai khoan hoac mat khau khong chinh xac');
            }
        }
        
    }
    public function logout(){
        Auth::logout();
       return redirect('admin');
    }
    public function register(){
        return view('backend.register');
    }
    public function signup(Request $req){
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ];
        $messages = [
            'name.required' => 'Họ và tên là trường bắt buộc',
            'name.max' => 'Họ và tên không quá 255 ký tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Email không quá 255 ký tự',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($req->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('register')->withErrors($validator)->withInput();
        }
        else{
            $data = array();

            $data['email'] = $req->email;
            $data['name']  = $req->name;
            $data['password']  = bcrypt($req->password) ;
            $data['status'] ='1';
            DB::table('users')->insert($data);
            return redirect('admin')->with('message','Dang ky thanh cong');  
        }
    }
    public function dashboad(){
        if(Auth::check()){
            $total_product = DB::table('product')->Count();
            $total_views = DB::table('product')->Count('views');
            $total_user = DB::table('users')->Count();
            $total_bill = DB::table('bill')->Count();
            return view('backend.main',compact('total_product','total_views','total_user','total_bill'));
        }
        else{
            return redirect('admin');
        }
    }
}
