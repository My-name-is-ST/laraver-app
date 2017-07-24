@extends('layouts.admin')
@section('content')
    <section class="admin_content">
        <div class="container">
              @if(isset($teams))
                    <div  class="col-lg-10 col-md-10 col-xs-10" id="r">
                        @foreach($teams as $team)
                            <div class="col-lg-11 col-md-11 col-xs-11">
                                <div class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7  col-xs-offset-9 col-xs-10">
                                    <form action="{{route('teamEdit',['team'=>$team->id])}}" method="post">
                                        {{method_field('DELETE')}}
                                        <input style="text-transform: uppercase" type="submit" value="Delete" class="btn">
                                        {{csrf_field()}}
                                    </form>
                                </div>
                                <div class="col-lg-11  col-md-11 col-xs-11 item_page">
                                    <div class="col-lg-11  col-md-11 col-xs-11">
                                        <span class="title"><h3><a href="{{route('teamEdit',['team'=>$team->id])}}">{{$team->name}}</a></h3></span>
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="col-lg-3 col-md-4 col-xs-4 img"><span> <img src="{{asset('img/'.$team->img)}}"> </span></div>
                                            <div style="padding-bottom: 5px" class="col-lg-offset-1  col-md-7 col-xs-6 col-lg-6"><span>JOB:</span>{{$team->position}}</div>
                                            <div class="col-lg-8 col-md-8 col-xs-12 text">{{$team->text}}</div>
                                            <div class="soc_net">
                                                <ul>
                                                    @if($team->twitter)
                                                        <li><a href="{{$team->twitter }}" class="fa fa-twitter"></a></li>
                                                    @endif
                                                    @if($team->facebook)
                                                        <li><a href="{{$team->facebook}}" class="fa fa-facebook"></a></li>
                                                    @endif
                                                    @if($team->pinterest)
                                                        <li><a href="{{$team->pinterest}}" class="fa fa-pinterest"></a></li>
                                                    @endif
                                                        @if($team->google_plus)
                                                        <li><a href="{{$team->google_plus}}" class="fa fa-google-plus"></a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class="col-lg-12 col-md-12 col-xs-12 info" >
                                            <div class="col-lg-offset-1 col-lg-5 col-md-5 col-xs-5"><span>Modified:</span><br>{{$team->updated_at}}</div>
                                            <div class="col-lg-offset-1 col-lg-5 col-md-5 col-xs-5"><span>Created:</span><br>{{$team->created_at}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
              @endif
            </div>
    </section>
@endsection