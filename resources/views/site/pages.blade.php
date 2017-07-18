@extends("layouts.site")

<style>
    .page_wrapper{
        background-color: #df0031;
        padding-bottom: 30px;
        padding-top: 50px;
    }
    .title_article, .title_article p{
        font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
        font-size: xx-large;
        color: #FFFFFF;
    }

</style>

@section('header')
    @include('site.header')
@endsection

@section('content')
    <section id="page" class="page_section"><!--Aboutus-->
        <div class="col-lg-12  col-sm-12  page_wrapper ">
            <div class=>
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-50 pull-right">
                    <img src="{{asset('img/'.$page->img)}}" class='img-circle delay-06s animated wow zoomIn'/>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-6 zoomIn wow animated ">
                    <div class="top_left white">
                        <h2><span class="title_article">{{$page->name}}</span></h2>
                        <div>
                            {!! $page->text !!}
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 work_bottom" style="padding-left: 10px">
                            <a href="{{route('home')}}" class="contact_btn">HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <div class="marj">
        @include('site.footer')
    </div>
@endsection