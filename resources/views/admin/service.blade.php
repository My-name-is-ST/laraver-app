@extends('layouts.admin')
@section('content')
    <section class="admin_content">
                @if(isset($services))
                <div class="container">
                        <div class="col-lg-10 col-md-10 col-xs-10" id="r" >
                            @foreach($services as $service)
                                <div class="col-lg-11 col-md-11 col-xs-11">
                                    <div class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7  col-xs-offset-9 col-xs-10">
                                        <form action="{{route('serviceEdit',['page'=>$service->id])}}" method="post">
                                            {{method_field('DELETE')}}
                                            <input style="text-transform: uppercase" type="submit" value="Delete" class="btn">
                                            {{csrf_field()}}
                                        </form>
                                    </div>
                                    <div class="col-lg-11  col-md-11 col-xs-11 item_page">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <span class="title"><h3><a href="{{route('serviceEdit',['page'=>$service->id])}}">{{$service->name}}</a></h3></span>
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <div id="iconImg" class="col-lg-3 col-md-3 col-xs-6 fa {{$service->icon}}"></div>
                                                <div class="col-lg-9 col-md-9 col-xs-12 text">{{$service->text}}</div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-xs-12 info" >
                                                <div class="col-lg-6 col-md-6 col-xs-12"><span>Modified:</span><br>{{$service->updated_at}}</div>
                                                <div class="col-lg-6 col-md-6 col-xs-12"><span>Created:</span><br>{{$service->created_at}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
                @endif
            </div>
    </section>
@endsection