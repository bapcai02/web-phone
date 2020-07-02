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
                            Sửa Danh Mục Sản Phẩm
                        </header>
                        <div class="panel-body">
                            @foreach($info as $edit)
                            <div class="position-center">
                                <form action="{{route('update_info',['id'=>$edit->id])}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">product_id</label>
                                        <input type="text" class="form-control" name="weigh" value="{{$edit->product_id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Weight</label>
                                        <input type="text" class="form-control" name="weigh" value="{{$edit->weight}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Size</label>
                                        <input type="text" class="form-control" name="size" value="{{$edit->size}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Sim</label>
                                        <textarea type="text" class="form-control" name="sim">{{$edit->sim}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Screen</label>
                                        <textarea type="text" class="form-control" name="screen" >{{$edit->screen}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chip_Cpu</label>
                                        <textarea type="text" class="form-control" name="chip">{{$edit->chip_cpu}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Pin</label>
                                        <textarea type="text" class="form-control" name="pin">{{$edit->pin}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">camera_before</label>
                                        <textarea type="text" class="form-control" name="camera_before">{{$edit->camera_before}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">camera_after</label>
                                        <textarea type="text" class="form-control" name="camera_after">{{$edit->camera_before}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">video</label>
                                        <textarea type="text" class="form-control" name="video">{{$edit->video}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">status</label>
                                        <input type="text" class="form-control" name="status" value="{{$edit->status}}">
                                    </div>
                                    <button type="submit" name="add_category" class="btn btn-info">Sửa</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
        </div>
    </div>
	</section>
</section>

@endsection