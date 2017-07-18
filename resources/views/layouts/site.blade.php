<!doctype html>
<html>

<head>
    @include('site.head')
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
    @yield('header')
</header>
<!--Header_section-->

<!--Content-->
    @yield('content')
<!--/Content-->

<!--Footer-->
    @yield('footer')
<!--/Footer-->
<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

</body>
</html>