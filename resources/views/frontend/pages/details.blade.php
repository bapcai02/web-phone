@extends('frontend.home')
@section('content')
<div id="wrap-inner">
	<div id="product-info" style="margin-top: 80px;">
		<div class="clearfix"></div>
		@foreach($product as $data)
			<h3 style="margin-bottom:60px;margin-left:30%;"><b>{{$data->name}}</b></h3>
			<div class="row" >
				<div class="col-md-4" style="float:left">
					<div style="width:300px; height:300px"  id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img src="{{URL::to('backend/images/product/'.$data->image1)}}" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							<img src="{{URL::to('backend/images/product/'.$data->image2)}}" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							<img src="{{URL::to('backend/images/product/'.$data->image2)}}" class="d-block w-100" alt="...">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
		
				<div style="float:right" id="product-details" class="col-xs-9 col-sm-9 col-md-6">
					<h4><span class="price">{{number_format(($data->price_unit)-($data->price_unit)*($data->price_promotion)/100)}} VND</span></h4>
					<h6>Giá Niêm Yết: <span class="price" style="text-decoration: line-through">{{number_format($data->price_unit)}}VND</span></h6>
					<h4>Bảo hành: 1 đổi 1 trong 12 tháng</h4> 
					<h4>Tình trạng: Mới 100%</h4>
					<h4>Khuyến mại: Hỗ trợ trả góp 0% dành cho các chủ thẻ Ngân hàng Sacombank</h4>
					<h4>Còn hàng: Còn hàng</h4>

					<div class="botton" style="margin-top:30px">
					@if(Auth::check())
					<button class="btn btn-primary"><a style ='color:black;list-style-type:none' href = "{{route('cart',['id'=>$data->id])}}">Đặt Hàng</a></button>
					@else
					<button class="btn btn-primary"><a style ='color:black;list-style-type:none' onclick="thongbao()">Đặt Hàng</a></button>
					@endif
					</div>
				</div>
				
		@endforeach	
		</div>							
	</div>
	<div id="product-detail" style="margin-top:90px"> 
		<div class="col-md-3" style="float: right;">
			<h3>Thông Số Kỹ Thuật</h3>
				@foreach($product_info as $data)
				<table class="table" >
					<tbody>
						<tr>
							<th scope="row">Kích thước</th>
							<td>{{$data->size}}</td>
						</tr>
						<tr>
							<th scope="row">Trọng lượng</th>
							<td>{{$data->weight}}</td>
						</tr>
						<tr>
							<th scope="row">Bộ Nhớ Đệm</th>
							<td>{{$data->size}}</td>
						</tr>
						<tr>
							<th scope="row">Loại Sim</th>
							<td>{{$data->sim}}</td>
						</tr>
						<tr>
							<th scope="row">Màn Hình</th>
							<td>{{$data->screen}}</td>
						</tr>
						<tr>
							<th scope="row">CPU</th>
							<td>{{$data->chip_cpu}}</td>
						</tr>
						<tr>
							<th scope="row">Camera trước</th>
							<td>{{$data->camera_after}}</td>
						</tr>
						<tr>
							<th scope="row">Camera sau</th>
							<td>{{$data->camera_before}}</td>
						</tr>
						<tr>
							<th scope="row">Quay video</th>
							<td>{{$data->video}}</td>
						</tr>
						<tr>
							<th scope="row">Pin</th>
							<td>{{$data->pin}}</td>
						</tr>
					</tbody>
				</table>
					
				@endforeach
		</div>
		<div class="col-md-9">
		<div class="content">
			<h3>Chi tiết sản phẩm</h3>
			@foreach($product_post as $data)
				{!! $data->posts !!}
			@endforeach
		</div>
	</div>
	</div>
</div>				
<script>
	function thongbao(){
		alert(" bạn cần đăng nhập để mua hàng");
	}
	
</script>	
@endsection