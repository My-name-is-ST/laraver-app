@extends('layouts.admin')
<style>
    .divImg{
        min-height: 70px;
        max-height: 70px;
        min-width: 70px;
        max-width: 70px;
        content: ' ';
    }
</style>
@section('content')
    <section class="admin_content">
        <div class="container">
            <div class="row">
                @if(isset($services))
                    <div class="col-xs-offset-1 col-lg-10" >
                        @foreach($services as $service)
                            <div class="col-lg-12" id="r">
                                <div class="col-xs-offset-2 col-xs-7 action">
                                    <form action="{{route('serviceEdit',['page'=>$service->id])}}" method="post">
                                        {{method_field('DELETE')}}
                                        <input style="text-transform: uppercase" type="submit" value="Delete" class="btn ">
                                        {{csrf_field()}}
                                    </form>
                                </div>
                                <div class="col-lg-11  col-md-11 col-sm-11 item_page">
                                    <div class="col-lg-12">
                                        <span class="title"><h3><a href="{{route('serviceEdit',['page'=>$service->id])}}">{{$service->name}}</a></h3></span>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <span><i class="fa {{$service->icon}}"></i></span>
                                            </div>
                                            <div class="col-lg-10 text">{{$service->text}}</div>
                                        </div>
                                        <div class="col-lg-12 info" >
                                            <div class="col-lg-3"><span>Modified:</span><br>{{$service->updated_at}}</div>
                                            <div class="col-lg-3"><span>Created:</span><br>{{$service->created_at}}</div>
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