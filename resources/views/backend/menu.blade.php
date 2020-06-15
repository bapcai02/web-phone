<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{route('dashboad')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Danh Mục Sản Phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('all_category')}}">Danh Sách Sản Phẩm</a></li>
                        <li><a href="{{route('add_category')}}">Thêm Sản Phẩm</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Danh Mục Thương Hiệu </span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('all_brand')}}">Danh Sách Thương Hiệu</a></li>
                        <li><a href="{{route('add_brand')}}">Thêm Thương Hiệu</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tablet"></i>
                        <span>Danh Mục Sản Phẩm </span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('all_product')}}">Danh Sách Sản Phẩm</a></li>
                        <li><a href="{{route('add_product')}}">Thêm Sản Phẩm</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>