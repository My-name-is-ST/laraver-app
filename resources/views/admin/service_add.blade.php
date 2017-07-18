@extends('layouts.admin')
@section('content')
    <section class="admin_content">
        <div class="container">
            <div class="row">
                <form method="post" action="{{route('serviceAdd')}}">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">title:</label>
                            <div class="col-xs-6">
                                <input class="form-control" name="name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">name font icon:</label>
                            <div class="col-xs-6">
                                <input class="form-control"  name="icon" value="{{old('icon')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">description:</label>
                            <div class="col-xs-6">
                                <textarea class="ckeditor" name="text" value="">{{old('text')}}</textarea>
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
    <script>
        CKEDITOR.replace('text')
    </script>
@endsection