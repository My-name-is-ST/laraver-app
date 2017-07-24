<div class="container">
    <div class="header_box">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset('img/logo.png')}}" alt="logo">
            </a>
        </div>
            @if(isset($menu))
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div id="main-nav" class="collapse navbar-collapse navStyle">
                        <ul class="nav navbar-nav" id="mainNav">
                            @foreach($menu as $item)
                                <li class=""><a href="#{{$item['alias']}}" class="scroll-link">{{$item["title"]}}</a></li>
                            @endforeach
<style>
    .menu_hidden ul {
        visibility: hidden;
        position: absolute;
        background-color: #ffffff;
    }
    .menu_hidden:hover ul{
        visibility: visible;
    }
</style>
                            @if(Auth::guest())
                                    <li><a href="{{route('login')}}">LOGIN</a></li>
                                @else
                                    <li class="menu_hidden"><a href="{{route('adminHome')}}">ADMIN PANEL</a>
                                        <ul>
                                            <li><a href="{{route('logout')}}">logout</a></li>
                                        </ul>
                                    </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            @endif
    </div>
</div>
@include('site.message')