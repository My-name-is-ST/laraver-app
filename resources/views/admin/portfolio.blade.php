@extends('layouts.admin')
@section('content')

    <section class="admin_content">
        <div class="row">
            <div class="container" id="p">
                @if(isset($portfolios))
                <div class="col-lg-10" id="r">
                    @foreach($portfolios as $portfolio)
                        <div class="col-lg-12">
                            <div class="col-xs-offset-2 col-xs-7 action">
                                <form action="{{route('portfolioEdit',['portfolio'=>$portfolio->id])}}" method="post">
                                    {{method_field('DELETE')}}
                                    <input style="text-transform: uppercase" type="submit" value="Delete" class="btn ">
                                    {{csrf_field()}}
                                </form>
                            </div>
                            <div class="col-lg-11  col-md-11 col-sm-11 item_page">
                                <div class="col-lg-12">
                                    <span class="title"><h3><a href="{{route('portfolioEdit',['portfolio'=>$portfolio->id])}}">{{$portfolio->name}}</a></h3></span>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="col-lg-offset-1 col-lg-3 col-md-3 col-sm-3 img"><span> <img src="{{asset('img/'.$portfolio->img)}}"> </span></div>
                                        <div class="col-lg-7"><span>Filter:</span>{{$portfolio->filter->name}}</div>
                                        <div class="col-lg-7"><span>Link:</span>{{$portfolio->link}}</div>
                                        <div class="col-lg-12 info" >
                                            <div class="col-lg-offset-1 col-lg-5"><span>Modified:</span>{{$portfolio->updated_at}}</div>
                                            <div class="col-lg-offset-1 col-lg-5"><span>Created:</span>{{$portfolio->created_at}}</div>
                                        </div>
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