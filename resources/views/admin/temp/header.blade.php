<section class="panel_menu">
    <div class="container-fluid">
        <div  class="col-lg-12 col-xs-12">
            <ul class="menu_admin">
                <li class="col-xs-4 col-md-1 col-lg-1" ><a  href="{{route('adminHome')}}">admin</a></li>
                <li class="col-xs-4 col-md-1 col-lg-1" ><a  href="{{route('pages')}}">pages</a></li>
                <li class="col-xs-4 col-md-1 col-lg-1" ><a  href="{{route('service')}}">service</a></li>
                <li class="col-xs-4 col-md-2 col-lg-2" ><a  href="{{route('portfolio') }}">portfolio</a></li>
                <li class="col-xs-4 col-md-1 col-lg-1" ><a  href="{{route('client')}}">client</a></li>
                <li class="col-xs-4 col-md-1 col-lg-1" ><a  href="{{route('team')}}">team</a></li>
                @if(Auth::guest())
                    {{redirect()->route('home')}}}
                @else
                    <li class="col-xs-4 col-md-1 col-lg-1"><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</section>
@include('site.message')