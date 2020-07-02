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
                            Sửa User
                        </header>
                        <div class="panel-body">
                            @foreach($user as $edit)
                            <div class="position-center">
                                <form action="{{route('update_user',['id'=>$edit->id])}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$edit->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="text" class="form-control" name="eamil" placeholder="Enter name" value="{{$edit->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter name" value="{{$edit->password}}">
                                    </div>
                                    <div class="form-group">
                                        <select name ='status' class="form-control input-sm m-bot15">
                                            <option value="1">Admin</option>
                                            <option value="0">User</option>
                                        </select>
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