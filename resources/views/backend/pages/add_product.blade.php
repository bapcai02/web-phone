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
                            Thêm Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{route('save_product')}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình Ảnh 1</label>
                                        <input type="file" name = "image1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình Ảnh 2</label>
                                        <input type="file" name = "image2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình Ảnh 3</label>
                                        <input type="file" name = "image3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">giá</label>
                                        <input type="text" class="form-control" name="price_unit" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">khuyến mãi</label>
                                        <input type="text" class="form-control" name="price_promotion" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số Lượng</label>
                                        <input type="text" class="form-control" name="total_quantity" placeholder="Enter name">
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
                                    <button type="submit" name="add_category" class="btn btn-info">Thêm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
    </div>
	</section>
</section>

@endsection