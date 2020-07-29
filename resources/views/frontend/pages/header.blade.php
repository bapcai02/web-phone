<header id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                <h1>
                    <a href="{{ route('index') }}"><img width="100px" height="80px" src="img/home/logo.png"></a>						
                    <nav><a id="pull" class="btn btn-danger" href="#">
                        <i class="fa fa-bars"></i>
                    </a></nav>			
                </h1>
            </div>
            <div id="search" class="col-md-5 col-sm-10 col-xs-10">
                <form action="{{ route('search') }}" method="GET">
                    @csrf
                    <input type="text" name="search" placeholder="Nhập từ khóa ...">
                    <input type="submit" name="submit" value="Tìm Kiếm">
                </form>
               
            </div>
            
                @if(Auth::check())
                <div class="login" style="width:200px ;margin-left:-30px;margin-right:-60px"  >
                    <span style="color: white" class="username">{{Auth::user()->name}}</span>
                    <b class="caret"></b>
                    <a href="{{route('out')}}"><i class="fa fa-key"></i> Log Out</a>
                </div>
            
                <div id='cart' class="col-md-2 col-sm-5 col-xs-5  ">

                    <a style="float: right; margin-right:30px" href="{{route('show')}}">{{Cart::count()}}</a>	
                    
                </div>
                @else
                <div class="login" >
                    <a href="{{ route('login') }}">Sign In</a>
                    <a href="{{ route('signup') }}">Sign Up</a>
                </div>   
                <div id='cart' class="col-md-2 col-sm-12 col-xs-9">
                
                    <a style="float: right; margin-right:30px">0</a>	
                    
                </div>
                
                @endif
                          
        </div>			
    </div>
</header>
<style>
    .login{
        padding: 30px;
    }
    .login a{
        padding: 7px;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
</style>