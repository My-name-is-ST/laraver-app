@extends('layouts.admin')
<style>
    .soc_net ul li{
        display: inline-block;
        padding-left: 1px;
    }
    .soc_net ul li a:hover{
        cursor: pointer;
    }
    .soc_net ul{
        list-style: none;
    }
</style>
@section('content')
    <section class="admin_content">
        <div class="container">
            <div class="row">
              @if(isset($teams))
                    <div class="col-lg-10" >
                        @foreach($teams as $team)
                            <div class="col-lg-12" id="r">
                                <div class="col-xs-offset-2 col-xs-7 action">
                                    <form action="{{route('teamEdit',['team'=>$team->id])}}" method="post">
                                        {{method_field('DELETE')}}
                                        <input style="text-transform: uppercase" type="submit" value="Delete" class="btn ">
                                        {{csrf_field()}}
                                    </form>
                                </div>
                                <div class="col-lg-11  col-md-11 col-sm-11 item_page">
                                    <div class="col-lg-12">
                                        <span class="title"><h3><a href="{{route('teamEdit',['team'=>$team->id])}}">{{$team->name}}</a></h3></span>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="col-lg-2 col-md-2 col-sm-2 img"><span> <img src="{{asset('img/'.$team->img)}}"> </span></div>
                                            <div style="padding-bottom: 5px" class="col-lg-offset-1 col-lg-8"><span>JOB:</span>{{$team->position}}</div>
                                            <div class="col-lg-10 text">{{$team->text}}</div>
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
                                        <div  class="col-lg-8 info" >
                                            <div class="col-lg-offset-1 col-lg-5"><span>Modified:</span><br>{{$team->updated_at}}</div>
                                            <div class="col-lg-offset-1 col-lg-5"><span>Created:</span><br>{{$team->created_at}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
              @endif
            </div>
        </div>
    </section>
@endsection