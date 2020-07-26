<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ route('dashboad') }}" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                @if(Auth::check())
                <span class="username">{{Auth::user()->name}}</span>
                <b class="caret"></b>
                @endif
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{route('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>