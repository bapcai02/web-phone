@extends('frontend.home')
@section('content')


<div id="wrap-inner">
    <div class="products">
        <h3>Tìm kiếm với từ khóa: <span>Samsung</span></h3>
        <div class="product-list row">

            @foreach($search as $data) 
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

    <div id="pagination">
        <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection