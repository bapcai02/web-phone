@extends('frontend.home')

@section('content')

<div id="wrap-inner">						
    <div id="hoa-don">
        <h3>Hóa đơn mua hàng</h3>							
        <table class="table-bordered table-responsive">
           
            <tr class="bold">
                <td width="30%">Tên sản phẩm</td>
                <td width="25%">Giá</td>
                <td width="20%">Số lượng</td>
                <td width="15%">Thành tiền</td>
            </tr>
            @foreach($items as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td class="price">{{number_format($data->price)}} VNĐ</td>
                <td>1</td>
                <td class="{{$data->qty}}">{{number_format($data->price*$data->qty)}}VNĐ</td>
            </tr>
            @endforeach
        </table>
        <td colspan="3">Tổng tiền:</td>
                <td class="total-price">{{$total}}</td>
    </div>
    <div id="xac-nhan">
        <br>
        <p align="justify">
            <b>Quý khách đã đặt hàng thành công!</b><br />
            • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
            • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
            <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
        </p>
    </div>
</div>

@endsection