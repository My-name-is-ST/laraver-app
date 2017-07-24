@extends('layouts.admin')
@section('content')
    @if(isset($clients))
        <section class="admin_content">
            <div class="container">
                <div class="col-lg-10 col-md-10 col-xs-10" id="r">
                    @foreach($clients as $client)
                        <div class="col-lg-11 col-md-11 col-xs-11">
                            <div class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7  col-xs-offset-9 col-xs-10 ">
                                <form action="{{route('clientEdit',['client'=>$client->id])}}" method="post">
                                    {{method_field('DELETE')}}
                                    <input style="text-transform: uppercase" type="submit" value="Delete" class="btn">
                                    {{csrf_field()}}
                                </form>
                            </div>
                            <div class="col-lg-11 col-md-11 col-xs-11 item_page">
                                <div class="col-lg-11 col-md-11 col-xs-11">
                                    <span class="title"><h3><a href="{{route('clientEdit',['client'=>$client->id])}}">{{$client->alias}}</a></h3></span>
                                    <div class="col-lg-12 col-md-11 col-xs-11">
                                        <div class="col-lg-3 col-md-4 col-xs-6 img" ><span> <img style="background-color: #df0031" src="{{asset('img/'.$client->icon)}}"> </span></div>
                                        <div class="col-lg-9 col-md-8 col-xs-11">
                                            <div class="col-lg-1 col-md-1 col-xs-1"><span>LINK:</span></div>
                                            <div class="col-lg-11 col-md-11 col-xs-11">{{$client->link}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xs-12 info" >
                                        <div class="col-lg-4 col-md-12 col-xs-12"><span>Modified:</span><br>{{$client->updated_at}}</div>
                                        <div class="col-lg-4 col-md-12 col-xs-12"><span>Created:</span><br>{{$client->created_at}}</div>
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