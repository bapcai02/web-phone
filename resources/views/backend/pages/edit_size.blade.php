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
                            Sửa Size
                        </header>
                        <div class="panel-body">
                            @foreach($size as $edit)
                            <div class="position-center">
                                <form action="{{route('update_size',['id'=>$edit->id])}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dung Lượng</label>
                                        <input type="text" class="form-control" name="GB" placeholder="Enter name" value="{{$edit->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">price_percent</label>
                                        <textarea type="text" class="form-control" name="price_percent" >{{$edit->price_percent}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info">Sửa</button>
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