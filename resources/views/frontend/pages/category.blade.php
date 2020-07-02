@extends('frontend.home')
@section('content')

<div id="wrap-inner">
    <div class="products"> 
        @foreach ( $cate as $data)
        <h3>{{ $data->name}}</h3> 
        @endforeach
        
        <div class="product-list row">
            @foreach($categories as $data) 
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

    <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {{ $categories->links() }}
          </ul>
        </div>
      </div>
</div>
@endsection