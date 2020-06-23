@extends('backend.index')
@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     
      Danh Mục Thương Hiệu
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
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
            <th>Tên Thương Hiệu</th>
            <th>Mô Tả</th>
            <th>Status</th>
            <th>Ngày Thêm</th>
            <th>Ngày Sửa</th>
            <th>Thao Tác</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($brand as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->desc}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            <td>
              <a href="{{route('edit_brand',['id'=>$data->id])}}">
              <i class="fa fa-check text-success text-active"></i>
              </a> <span>   </span>
              <a href="{{route('delete_brand',['id'=>$data->id])}}" onclick="return confirm('bạn có muốn xoá không')"><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
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