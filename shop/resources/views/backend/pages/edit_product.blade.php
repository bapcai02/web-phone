@extends('backend.index')
@section('content')
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            @foreach($product as $pro)
                                <form action="{{route('update_product',['id'=>$pro->id])}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                        <input value="{{$pro->name}}" type="text" class="form-control" name="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label>
                                        <textarea type="text" class="form-control" name="desc"  placeholder="desc">{{$pro->title}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình Ảnh 1</label>
                                        <input type="file" name = "image1" >
                                        <img src="{{URL::to('/bapcai/img/product/'.$pro->image1)}}" width="100px" height="100px"></td>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình Ảnh 2</label>
                                        <input type="file" name = "image2">
                                        <img src="{{URL::to('/bapcai/img/product/'.$pro->image3)}}" width="100px" height="100px"></td>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình Ảnh 3</label>
                                        <input type="file" name = "image3">
                                        <img src="{{URL::to('/bapcai/img/product/'.$pro->image3)}}" width="100px" height="100px"></td>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">giá</label>
                                        <input value="{{$pro->price_unit}}" type="text" class="form-control" name="price_unit" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">khuyến mãi</label>
                                        <input value="{{$pro->price_promotion}}" type="text" class="form-control" name="price_promotion" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <select name ='category' class="form-control input-sm m-bot15">
                                            @foreach($category as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name ='brand' class="form-control input-sm m-bot15">
                                            @foreach($brand as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name ='size' class="form-control input-sm m-bot15">
                                            @foreach($size as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name ='status' class="form-control input-sm m-bot15">
                                            <option value="1">Hiển Thị</option>
                                            <option value="0">Ản</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info">Thêm</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

            </div>
        </div>
    </div>
	</section>
</section>

@endsection