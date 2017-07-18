@if(isset($teams) && is_object($teams))
    <section class="page_section team" id="team"><!--main-section team-start-->
        <div class="container">
            <h2>Team</h2>
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
            <div class="team_section clearfix">
                @foreach($teams as $k=>$item)
                    <div class="team_area">
                        <div class="team_box wow fadeInDown delay-{{($k+1)*3}}s">
                            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                            <img src="{{asset('img/'.$item->img)}}" alt="{{$item->name}}"/>
                            <ul>
                                @if($item->twitter)
                                    <li><a href="{{$item->twitter }}" class="fa fa-twitter"></a></li>
                                @endif
                                @if($item->facebook)
                                    <li><a href="{{$item->facebook}}" class="fa fa-facebook"></a></li>
                                @endif
                                @if($item->pinterest)
                                    <li><a href="{{$item->pinterest}}" class="fa fa-pinterest"></a></li>
                                @endif
                                @if($item->google_plus)
                                    <li><a href="{{$item->google_plus}}" class="fa fa-google-plus"></a></li>
                                @endif
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-{{($k+1)*3}}s">{{$item->name}}</h3>
                        <span class="wow fadeInDown delay-{{($k+1)*3}}s">{{$item->position}}</span>
                        <p class="wow fadeInDown delay-{{($k+1)*3}}s">{!!$item->text!!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif