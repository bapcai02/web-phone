@extends('backend.index')
@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     
      Danh Mục Hóa Đơn
    </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã Hoá Đơn</th>
            <th>Thời Gian</th>
            <th>Khách Hàng</th>
            <th>SDT</th>
            <th>Địa Chỉ</th>
            <th>Tên Sản Phẩm</th>
            <th>Ảnh Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng Tiền Hàng</th>
            <th>In Hóa Đơn</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($bill as $data)
          <tr>
            <td>MHD{{$data->mhd}}</td>
            <td>{{$data->date_order}}</td>
            <td>{{ $data->name_user }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->name }}</td>
             <td> <img src="{{URL::to('/backend/images/product/'.$data->image1)}}" width="100px" height="100px"></td>
            <td>{{ $data->qty }}</td>
            <td>{{ $data->total }}</td>
            <td>
              <a href="{{route('print_pdf',['id'=>$data->id])}}" onclick="return confirm('bạn có muốn in hóa đơn không')"><i class="fa fa-check text-success text-active"></i></a>
            </td>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {{ $bill->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>

@endsection