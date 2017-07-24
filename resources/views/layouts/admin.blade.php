<!doctype html>
<html lang="en">
<head>
    @include('admin.temp.head')
</head>
<body>

<header>
    @section('header')
        @include('admin.temp.header')
    @endsection
    @yield('header')

        @section('left_bar')
            @include('admin.temp.left_bar')
        @endsection
        @yield('left_bar')

</header>

@yield('content')

@section('footer')
    @include('admin.temp.footer')
@endsection
@yield('footer')

<script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-filestyle.min.js')}}"></script>
</body>
</html>