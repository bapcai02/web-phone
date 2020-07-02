<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use PDF;


class BillController extends Controller
{

    public function all_bill(){
        if(Auth::check()){
            $bill = DB::table('bill')->join('product','product.id','bill.product_id')->paginate(5);
            return view('backend.pages.all_bill',compact('bill'));
        }
        else{
            return redirect('admin');
        }
    }   

    public function print_order($id){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($id));
        return $pdf->stream();
    }
    public function print_order_convert($id){
        $bill = DB::table('bill')->join('product','product.id','bill.product_id')
                ->where('mhd',$id)->get();
        // dd($bill);
        $output = '';
        $output .= '<style>
        body{
          font-family:DejaVu Sans;
        }
        table {
          border-collapse: collapse;
        }
        
        table, th, td {
          border: 1px solid black;
        }
        </style>
      Hóa Đơn
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã Hoá Đơn</th>
            <th>Ngày Mua</th>
            <th> Tên Khách Hàng</th>
            <th>SDT</th>
            <th>Địa Chỉ</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng Tiền Hàng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>';
         foreach ($bill as $data){
          $output .=' 
          <tr>
              <td>MHD'.$data->mhd.'</td>
              <td>'.$data->date_order.'</td>
              <td>'.$data->name_user.'</td>
              <td>'.$data->phone.'</td>
              <td>'.$data->address.'</td>
              <td>'.$data->name.'</td>
              <td>'.$data->qty.'</td>
              <td>'.$data->total.'</td>
          </tr>';
         }
          
  $output .='    
          </tbody>
        </table>';
        return $output;
    }
}
