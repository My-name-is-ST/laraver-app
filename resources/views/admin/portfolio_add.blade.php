@extends('layouts.admin')

@section('content')
    <style>
        .padding_form_adm div{
            padding-bottom: 25px;
        }
    </style>
<section class="admin_content">
    <div class="container">
            <div class="col-lg-12 col-xs-12 col-md-12">
                <form class="padding_form_adm" action="{{route('portfolioAdd')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-lg-4 col-xs-4 col-md-4 control-label">Title:</label>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                            <input class="form-control" value="{{old('name')}}" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-xs-4 col-md-4 control-label">Link:</label>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                            <input class="form-control" value="{{old('link')}}" type="text" name="link">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-xs-4 col-md-4 control-label">filter:</label>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                            <select class="form-control" name="filter_id">
                                @if(isset($filters))
                                    @foreach($filters as $filter)
                                        <option value="{{$filter->id}}">{{$filter->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div  class="form-group">
                        <label  class="col-lg-4 col-xs-4 col-md-4 control-label">Image:</label>
                        <div class="col-lg-6 col-xs-6 col-md-6">
                            <input type="file" name="img"  accept="image/jpeg,image/png,image/gif" class="filestyle" data-buttonName="btn-primary" data-icon="false">
                        </div>
                    </div>
                    <div class="col-lg-offset-8 col-lg-10 col-xs-offset-5 col-xs-8 col-md-offset-8 col-md-10">
                        <button class="btn btn-primary" type="submit">Save Page</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
    </div>
</section>
@endsection