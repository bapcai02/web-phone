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
                            Thêm Dung Lượng
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{route('save_size')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dung Lượng</label>
                                        <input type="text" class="form-control" name="GB" placeholder="Enter name">
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