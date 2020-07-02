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
                            Thêm Bài Viết
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($type as $data)
                                <form action="{{route('save_type')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <select name ='product' class="form-control input-sm m-bot15">
                                            <option value="{{$data->product_id}}">{{$data->name}}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                       <textarea class="ckeditor" name="posts"  required >{{ $data->posts }}</textarea>
                                    </div>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('posts',{
                                            language:'vi',
                                            filebrowserImageBrowseUrl: './ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl: './ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl: './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl: './public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });
                                    </script>                               
                                    <button type="submit" class="btn btn-info">Thêm</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

            </div>
        </div>
    </div>
	</section>
</section>

@endsection