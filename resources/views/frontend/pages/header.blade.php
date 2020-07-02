<header id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                <h1>
                    <a href="#"><img width="100px" height="80px" src="img/home/logo.png"></a>						
                    <nav><a id="pull" class="btn btn-danger" href="#">
                        <i class="fa fa-bars"></i>
                    </a></nav>			
                </h1>
            </div>
            <div id="search" class="col-md-7 col-sm-12 col-xs-12">
                <form action="{{ route('search') }}" method="GET">
                    @csrf
                    <input type="text" name="search" value="Nhập từ khóa ...">
                    <input type="submit" name="submit" value="Tìm Kiếm">
                </form>
            </div>
            <div id="cart" class="col-md-2 col-sm-12 col-xs-12">
                <a class="display" href="{{route('show')}}">Giỏ hàng</a>
                <a href="#">{{Cart::count()}}</a>				    
            </div>
        </div>			
    </div>
</header>