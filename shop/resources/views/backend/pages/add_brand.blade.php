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
                            Thêm Thương Hiệu
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{route('save_brand')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên thương hiệu</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô Tả</label>
                                        <textarea type="text" class="form-control" name="desc"  placeholder="desc"></textarea>
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