@extends('layouts.admin')
@section('content')
    <section class="admin_content">
        <div class="container">
            <div class="row">
                <form  action="{{route('serviceEdit',['service'=>$service['id']])}}" method="post">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">title:</label>
                            <div class="col-xs-6">
                                <input class="form-control" name="name" value="{{$service['name']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">name font icon:</label>
                            <div class="col-xs-6">
                                <input class="form-control" name="icon" value="{{$service['icon']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">description:</label>
                            <div class="col-xs-6">
                                <textarea class="ckeditor" name="text" value="">{{$service['text']}}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-offset-8 col-xs-10">
                            <button type="submit" class="btn btn-primary" value="Save">Save Page</button>
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