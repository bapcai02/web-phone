<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BillController extends Controller
{
    public function all_bill(){
        $bill = DB::table('bill')->get();

        return view('backend.pages.all_bill',compact('bill'));
    }
    public function add_bill(){
        $product = DB::table('product')->get();
        $customer = DB::table('customer')->get();
        return view('backend.pages.add_bill',compact('product','customer'));
    }
    public function save_bill(Request $req){

        $data = array();
        $data['total'] = $req->total;
        $data['price'] = $req->price;
        $data['price_promotion'] = $req->promotion;
        $data['payment'] = $req->payment;
        $data['date_order'] = Carbon::now();;
        $data['total'] = $req->total;
        $data['updated_at'] = NULL;

        DB::table('bill')->insert($data);

       return redirect('all-bill')->with('message','Thêm thành công');

    }
    public function edit_bill($id){
        $brand = DB::table('bill')->where('id',$id)->get();
        return view('backend.pages.edit_bill',compact('bill'));
    }
    public function update_brand($id, Request $req){
        $data = array();
        $data['name'] = $req->name;
        $data['desc'] = $req->desc;
        $data['status']= $req->status;
        $data['updated_at'] = Carbon::now();

        DB::table('bill')->where('id',$id)->update($data);

        return   redirect('all-bill')->with('message', 'Sửa thành công');
    }
    public function detete_bill($id){
        DB::table('bill')->where('id',$id)->delete();

        return redirect('all-bill')>with('message', 'Xoá thành công');;
    }
}
