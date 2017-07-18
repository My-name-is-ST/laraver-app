@extends('layouts.admin')
@section('content')
    @if(isset($pages))
        <section class="admin_content">
            <div class="container" id="p">
                <div class="col-lg-10" id="r">
                    @foreach($pages as $page)
                        <div class="col-lg-12">
                            <div class="col-xs-offset-2 col-xs-7 action">
                                <form action="{{route('pagesEdit',['page'=>$page->id])}}" method="post">
                                    {{method_field('DELETE')}}
                                    <input style="text-transform: uppercase" type="submit" value="Delete" class="btn ">
                                    {{csrf_field()}}
                                </form>
                            </div>
                            <div class="col-lg-11  col-md-11 col-sm-11 item_page">
                                <div class="col-lg-12">
                                    <span class="title"><h3><a href="{{route('pagesEdit',['page'=>$page->id])}}">{{$page->name}}</a></h3></span>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="col-lg-2 col-md-2 col-sm-2 img"><span> <img src="{{asset('img/'.$page->img)}}"> </span></div>
                                       <div class="col-lg-10 text">{{$page->text}}</div>
                                    </div>
                                    <div class="col-lg-12 info" >
                                        <div class="col-lg-3"><span>Alias:</span><br>{{$page->alias}}</div>
                                        <div class="col-lg-3"><span>Modified:</span><br>{{$page->updated_at}}</div>
                                        <div class="col-lg-3"><span>Created:</span><br>{{$page->created_at}}</div>
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