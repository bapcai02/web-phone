@extends('backend.index')
@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     
      Danh Mục Size
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
      @endif
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Dung Lượng</th>
            <th>Ngày Thêm</th>
            <th>Ngày Sửa</th>
            <th>Thao Tác</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($size as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            <td>
              <a href="{{route('edit_size',['id'=>$data->id])}}">
              <i class="fa fa-check text-success text-active"></i>
              </a> <span>   </span>
              <a href="{{route('delete_size',['id'=>$data->id])}}" onclick="return confirm('bạn có muốn xoá không')"><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>

@endsection