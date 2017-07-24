@extends('layouts.admin')
@section('content')
    @if(isset($pages))
        <section class="admin_content">
            <div class="container">
                <div class="col-lg-10 col-md-10 col-xs-10" id="r">
                    @foreach($pages as $page)
                        <div class="col-lg-11 col-md-11 col-xs-11">
                            <div class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7  col-xs-offset-9 col-xs-10 ">
                                <form action="{{route('pagesEdit',['page'=>$page->id])}}" method="post">
                                    {{method_field('DELETE')}}
                                    <input style="text-transform: uppercase" type="submit" value="Delete" class="btn ">
                                    {{csrf_field()}}
                                </form>
                            </div>
                            <div class="col-lg-11  col-md-11 col-xs-11 item_page">
                                <div class="col-lg-11  col-md-11 col-xs-11">
                                    <span class="title"><h3><a href="{{route('pagesEdit',['page'=>$page->id])}}">{{$page->name}}</a></h3></span>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="col-lg-3 col-md-4 col-xs-6 img"><span> <img src="{{asset('img/'.$page->img)}}"> </span></div>
                                        <div class="col-lg-9 col-md-8 col-xs-12 text">{{$page->text}}</div>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-xs-11 info" >
                                        <div class="col-lg-4 col-md-4 col-xs-4"><span>Alias:</span><br>{{$page->alias}}</div>
                                        <div class="col-lg-4 col-md-4 col-xs-4"><span>Modified:</span><br>{{$page->updated_at}}</div>
                                        <div class="col-lg-4 col-md-4 col-xs-4"><span>Created:</span><br>{{$page->created_at}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection