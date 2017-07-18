@extends('layouts.admin')

@section('content')
    <style>
        .padding_form_adm div{
            padding-bottom: 25px;
        }
    </style>
    <section class="admin_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="padding_form_adm" action="{{route('portfolioEdit',['portfolio'=>$portfolio['id']]) }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Title:</label>
                            <div class="col-lg-6">
                                <input class="form-control" value="{{$portfolio['name']}}" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Link:</label>
                            <div class="col-lg-6">
                                <input class="form-control" value="{{$portfolio['link']}}" type="text" name="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">filter:</label>
                            <div class="col-lg-6">
                                <select class="form-control " value="{{$portfolio['filters_id']}}" name="filters_id">
                                    @if(isset($filters))
                                        @foreach($filters as $filter)
                                            <option value="{{$filter->id}}">{{$filter->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div  class="form-group">
                            <label  class="col-xs-4 control-label">Image:</label>
                            <div class="col-xs-6">
                                <input type="file" name="img"  accept="image/jpeg,image/png,image/gif" class="filestyle" data-buttonName="btn-primary" data-icon="false">
                            </div>
                        </div>
                        <div class="col-xs-offset-8 col-xs-10">
                            <input type="hidden"name="old_img" value="{{$portfolio['img']}}">
                            <button class="btn btn-primary" type="submit">Save Page</button>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection