@if(isset($pages) && is_object($pages))
    @foreach($pages as $k=>$page)
        @if($k%2==0)
            <!--Hero_Section-->
            <section id="{{$page->alias}}" class="top_cont_outer">
                <div class="hero_wrapper">
                    <div class="container">
                        <div class="hero_section">
                            <div class="row">
                                <div class="col-lg-5 col-sm-7">
                                    <div class="top_left_cont zoomIn wow animated">
                                        <h2>{{$page->title}}</h2>
                                        {!! $page->text !!}
                                        <a href="{{route('page',['alias'=>$page->alias])}}" class="read_more2">Read more</a> </div>
                                </div>
                                <div class="col-lg-7 col-sm-5">
                                    <img class="img-circle delay-01s animated wow zoomIn" src="{{asset('img/'.$page->img)}}" alt="{{$page->alias}}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Hero_Section-->
        @else
            <section id="{{$page->alias}}" style="padding-top: 5px"><!--Aboutus-->
                <div class="inner_wrapper">
                    <div class="container">
                        <h2>{{$page->name}}</h2>
                        <div class="inner_section">
                            <div class="row">
                                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                    <img src="{{asset('img/'.$page->img)}}" class='img-circle delay-03s animated wow zoomIn'/>
                                </div>
                                <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                                    <div class=" delay-01s animated fadeInDown wow animated">
                                        {!!  $page->text !!}
                                    </div>
                                    <div class="work_bottom"> <span>Want to know more..</span>
                                        <a href="{{route('page',['alias'=>$page->alias])}}" class="contact_btn">Read more</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Aboutus-->
        @endif
    @endforeach
@endif