@extends('layouts.admin')
@section('content')
<section class="admin_content">
    <div class="container">
        <div class="row">
                <div class="col-xs-12">
                    <form action="{{route('teamAdd')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">name:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">job:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="position" value="{{old('position')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">text:</label>
                            <div class="col-xs-6">
                                <textarea  class="ckeditor"  name="text" value="">{{old('name')}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Image:</label>
                            <div class="col-xs-6">
                                <input type="file" name="img"  accept="image/jpeg,image/png,image/gif" class="filestyle" data-buttonName="btn-primary" data-icon="false">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-8 col-xs-10">
                                <button type="submit" class="btn btn-primary" value="Save">Save page</button>
                            </div>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
        </div>
    </div>
</section>
    <script type="text/javascript">
        CKEDITOR.replace('text');
    </script>
@endsection