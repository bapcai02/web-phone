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
                            Thêm Chi Tiết Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{route('save_info')}}" method="post" >
                                    @csrf           
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product_id</label>
                                        <select name ='product_id' class="form-control input-sm m-bot15">
                                            @foreach($product as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>                             
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Weight</label>
                                        <input type="text" class="form-control" name="weigh" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Size</label>
                                        <input type="text" class="form-control" name="size" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Sim</label>
                                        <textarea type="text" class="form-control" name="sim"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Screen</label>
                                        <textarea type="text" class="form-control" name="screen"  ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chip_Cpu</label>
                                        <textarea type="text" class="form-control" name="chip"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Pin</label>
                                        <textarea type="text" class="form-control" name="pin"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">camera_before</label>
                                        <textarea type="text" class="form-control" name="camera_before"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">camera_after</label>
                                        <textarea type="text" class="form-control" name="camera_after"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">video</label>
                                        <textarea type="text" class="form-control" name="video"></textarea>
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