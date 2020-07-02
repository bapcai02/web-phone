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
                            Thêm Hoá Đơn
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{route('save_bill')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Product_Id</label>                                    
                                        <select name ='product_id' class="form-control input-sm m-bot15">
                                            @foreach($product as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>                                    
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Customer_id</label>
                                        <select name ='customer_id' class="form-control input-sm m-bot15">
                                            @foreach($customer as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Khách Hàng</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">SDT</label>
                                        <input type="text" class="form-control" name="sdt" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa Chỉ</label>
                                        <textarea type="text" class="form-control" name="address"  placeholder="desc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số Lượng</label>
                                        <input type="text" class="form-control" name="amount" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" class="form-control" name="price" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Khuyến Mãi</label>
                                        <input type="text" class="form-control" name="price_promotion" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tổng Tiền</label>
                                        <input type="text" class="form-control" name="total" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình Thức Thanh Toán</label>
                                        <input type="text" class="form-control" name="payment" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Note</label>
                                        <input type="text" class="form-control" name="note" placeholder="Enter name">
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-info">Thêm</button>
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