<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    public function __construct()
    {
        $category = DB::table('category')->limit(7)->get();
        View::share('category', $category);
    }
    public function index(){
        $category = DB::table('category')->limit(7)->get();
        $brand = DB::table('brand')->get();
        $product_hot = DB::table('product')->orderBy('price_promotion','desc')->limit(8)->get();
        $product_new = DB::table('product')->orderBy('id','desc')->limit(8)->get();
        $product_watch = DB::table('product')->where('category_id','3')->orderBy('price_promotion','desc')->limit(4)->get();
        $product_accessories = DB::table('product')->where('category_id','6')->orderBy('price_promotion','desc')->limit(4)->get();
        return view('frontend.pages.index',compact('category','brand','product_hot','product_new','product_watch','product_accessories'));
    }
    public function search(Request $req){

        $key = $req->search;

        $search = DB::table('product')->where('name','like',$key)
        ->orderBy('id','desc')->limit(8)->get();
        return view('frontend.pages.search',compact('search'));
    }
    public function login(){
        return view('frontend\signin');
    }
    public function signin(Request $req){
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
            return redirect('login')->withErrors($validator)->withInput();
        }
        else{
            $email = $req->input('email');
            $password = ($req->input('password'));
            $status = '0';
            if(Auth::attempt((['email'=>$email, 'password'=>$password,'status'=>$status]))){
                return redirect('home');
               
            }
            else{
                return redirect('login')->with('messages','tai khoan hoac mat khau khong chinh xac');
            }
        }
    }
    public function signup(){
        return view('frontend\signup');
    }
    public function register(Request $req){
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
            return redirect('signup')->withErrors($validator)->withInput();
        }
        else{
            $data = array();

            $data['email'] = $req->email;
            $data['name']  = $req->name;
            $data['password']  = bcrypt($req->password) ;
            $data['status'] ='0';
            DB::table('users')->insert($data);
            return redirect('login')->with('message','Dang ky thanh cong');  
        }
    }
    public function logout(){
        Auth::logout();
       return redirect('home');
    }
}
