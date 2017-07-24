@extends('layouts.admin')

@section('content')
    <section class="admin_content">
        <div class="container">
            <div class="row">
                <form method="post" action="{{route('clientAdd')}}" enctype="multipart/form-data">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">title:</label>
                            <div class="col-xs-6">
                                <input class="form-control" name="alias" value="{{old('alias')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">link:</label>
                            <div class="col-xs-6">
                                <input class="form-control" name="link" value="{{old('link')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Image:</label>
                            <div class="col-xs-6">
                                <input type="file" name="icon"  accept="image/jpeg,image/png,image/gif" class="filestyle" data-buttonName="btn-primary" data-icon="false">
                            </div>
                        </div>
                        <div class="col-xs-offset-8 col-xs-10">
                            <button type="submit" class="btn btn-primary" value="Save">Save page</button>
                        </div>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </section>
@endsection