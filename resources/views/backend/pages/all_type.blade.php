@extends('backend.index')
@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     
      Danh Mục Hóa Đơn
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
            <th>Mô Tả Chi Tiết</th>
            <th>Thao Tác</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($type as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{!! $data->posts !!}</td>
            <td>
              <a href="{{route('edit_type',['id'=>$data->id])}}">
              <i class="fa fa-check text-success text-active"></i>
              </a> <span>   </span>
            </td>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {{ $type->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>

@endsection