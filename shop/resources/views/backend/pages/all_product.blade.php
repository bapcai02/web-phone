@extends('backend.index')
@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     
       Sản Phẩm
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
            <th>Tên Sản Phẩm</th>
            <th>category_id</th>
            <th>Hình Ảnh 1</th>
            <th>Hình Ảnh 2</th>
            <th>Hình Ảnh 3</th>
            <th>size_id</th>
            <th>price_unit</th>
            <th>price_promotion</th>
            <th>title</th>
            <th>Status</th>
            <th>Ngày Thêm</th>
            <th>Ngày Sửa</th>
            <th>Thao Tác</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($product as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->category_id}}</td>
            @if($data->image1)
              <td> <img src="{{URL::to('/backend/images/product/'.$data->image1)}}" width="100px" height="100px"></td>
            @else
              <td>NULL</td>
            @endif
            @if($data->image2)
              <td> <img src="{{URL::to('/backend/images/product/'.$data->image2)}}" width="100px" height="100px"></td>
            @else
              <td>NULL</td>
            @endif
            @if($data->image3)
              <td> <img src="{{URL::to('/backend/images/product/'.$data->image2)}}" width="100px" height="100px"></td>
            @else
              <td>NULL</td>
            @endif
            <td>{{$data->size_id}}</td>
            <td>{{$data->price_unit}}</td>
            <td>{{$data->price_promotion}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            <td>
              <a href="{{route('edit_product',['id'=>$data->id])}}">
              <i class="fa fa-check text-success text-active"></i>
              </a> <span>   </span>
              <a href="{{route('delete_product',['id'=>$data->id])}}" onclick="return confirm('bạn có muốn xoá không')"><i class="fa fa-times text-danger text"></i></a>
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