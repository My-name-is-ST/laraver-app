
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, maximum-scale=1">
@if(isset($title))
    <title>{{$title}}</title>
@else
    <title>Unique</title>
@endif
<link rel="icon" href="{{asset('favicon.png')}}" type="image/png">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/admin-panel-style.css')}}" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src=" {{asset('js/respond-1.1.0.min.js')}} "></script>
<script src="{{asset('js/html5shiv.js')}}"></script>
<script src="{{asset('js/html5element.js')}}"></script>
<![endif]-->