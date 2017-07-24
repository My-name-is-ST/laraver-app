@extends('layouts.admin')
@section('content')
    <section class="admin_content">
            <div class="container">
                @if(isset($portfolios))
                <div class="col-lg-10 col-md-10 col-xs-10" id="r">
                    @foreach($portfolios as $portfolio)
                        <div class="col-lg-11 col-md-11 col-xs-11">
                            <div class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7  col-xs-offset-9 col-xs-10">
                                <form action="{{route('portfolioEdit',['portfolio'=>$portfolio->id])}}" method="post">
                                    {{method_field('DELETE')}}
                                    <input style="text-transform: uppercase" type="submit" value="Delete" class="btn">
                                    {{csrf_field()}}
                                </form>
                            </div>
                            <div class="col-lg-11 col-md-11 col-xs-11 item_page">
                                <div class="col-lg-11 col-md-11 col-xs-11">
                                    <span class="title"><h3><a href="{{route('portfolioEdit',['portfolio'=>$portfolio->id])}}">{{$portfolio->name}}</a></h3></span>
                                    <div class="col-lg-11 col-md-11 col-xs-11">
                                        <div class="col-lg-4  col-md-4  col-xs-5 img"><span> <img src="{{asset('img/'.$portfolio->img)}}"> </span></div>
                                        <div class="col-lg-7 col-md-7 col-xs-6"><span>Filter:</span>{{$portfolio->filter->name}}</div>
                                        <div class="col-lg-7 col-md-7 col-xs-6"><span>Link:</span>{{$portfolio->link}}</div>
                                        <div class="col-lg-12 col-md-12 col-xs-12 info" >
                                            <div class="col-lg-5 col-md-12 col-xs-12"><span>Modified:</span>{{$portfolio->updated_at}}</div>
                                            <div class="col-lg-5 col-md-12 col-xs-12"><span>Created:</span>{{$portfolio->created_at}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
            </div>
    </section>
    @if(count($portfolios)>10)
        <div style="background-color: #080808">
            dd
        </div>
        <section>
            <div class="container">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div></div>
                </div>
            </div>
        </section>
    @endif
@endsection