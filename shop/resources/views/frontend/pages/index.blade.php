@extends('frontend.home')

@section('content')

	<div id="wrap-inner">
		<div class="products">
			<h3>sản phẩm nổi bật</h3>
			<div class="product-list row">
				@foreach($product_hot as $data)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="#"><img src="{{URL::to('/backend/images/product/'.$data->image1)}}" class="img-thumbnail"></a>
						<p><a href="#">{{$data->name}}</a></p>
						<h4><span class="price">{{number_format($data->price_unit-($data->price_unit)*($data->price_promotion)/100)}} VND</span></h4>
						<h6>Giá Niêm Yết: <span class="price" style="text-decoration: line-through">{{number_format($data->price_unit)}}VND</span></h6>
						<div class="marsk">
							<a href="{{route('details',['id'=>$data->id])}}">Xem chi tiết</a>
						</div>                                    
					</div>
				@endforeach
			</div>                	                	
		</div>

		<div class="products">
			<h3>sản phẩm mới</h3>
			<div class="product-list row">
				@foreach($product_new as $data)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="#"><img src="{{URL::to('/backend/images/product/'.$data->image1)}}" class="img-thumbnail"></a>
						<p><a href="#">{{$data->name}}</a></p>
						<h4><span class="price">{{number_format($data->price_unit-($data->price_unit)*($data->price_promotion)/100)}} VND</span></h4>
						<h6>Giá Niêm Yết: <span class="price" style="text-decoration: line-through">{{number_format($data->price_unit)}}VND</span></h6>	  
						<div class="marsk">
							<a href="{{route('details',['id'=>$data->id])}}">Xem chi tiết</a>
						</div>                      	                        
					</div>
				@endforeach	
			</div>    
		</div>
		<div class="products">
			<h3>ĐỒNG HỒ THÔNG MINH</h3>
			<div class="product-list row">
				@foreach($product_watch as $data)								
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="{{URL::to('/backend/images/product/'.$data->image1)}}" class="img-thumbnail"></a>
					<p><a href="#">{{$data->name}}</a></p>
					<h4><span class="price">{{number_format($data->price_unit-($data->price_unit)*($data->price_promotion)/100)}} VND</span></h4>
					<h6>Giá Niêm Yết: <span class="price" style="text-decoration: line-through">{{number_format($data->price_unit)}}VND</span></h6>	  	  
					<div class="marsk">
						<a href="{{route('details',['id'=>$data->id])}}">Xem chi tiết</a>
					</div>                      	                        
				</div>
				@endforeach
			</div>    
		</div>
		<div class="products">
			<h3>PHỤ KIỆN</h3>
			<div class="product-list row">
				@foreach($product_accessories as $data)								
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="{{URL::to('/backend/images/product/'.$data->image1)}}" class="img-thumbnail"></a>
					<p><a href="#">{{$data->name}}</a></p>
					<h4><span class="price">{{number_format($data->price_unit-($data->price_unit)*($data->price_promotion)/100)}} VND</span></h4>
					<h6>Giá Niêm Yết: <span class="price" style="text-decoration: line-through">{{number_format($data->price_unit)}}VND</span></h6>	  	  
					<div class="marsk">
						<a href="{{route('details',['id'=>$data->id])}}">Xem chi tiết</a>
					</div>                      	                        
				</div>
				@endforeach
			</div>    
		</div>
	</div>
	


@endsection