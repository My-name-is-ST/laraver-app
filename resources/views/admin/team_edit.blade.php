@extends('layouts.admin')

@section('content')
    <section class="admin_content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="{{route('teamEdit',['tem'=>$team['id']])}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">name:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="name" value="{{$team['name']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">job:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name='position' value="{{$team['position']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">text:</label>
                            <div class="col-xs-6">
                                <textarea  class="ckeditor"  name="text" value="">{{$team['name']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Old Image:</label>
                            <div class="col-xs-6">
                                <img style=" max-height: 150px; max-width: 150px; align-self: center" src="{{asset('/img/'.$team['img'])}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="old_img" value="{{$team['img']}}">
                            <label class="col-xs-4 control-label">Image:</label>
                            <div class="col-xs-6">
                                <input type="file" name="img"  accept="image/jpeg,image/png,image/gif" class="filestyle" data-buttonName="btn-primary" data-icon="false">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">twitter:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="twitter" value="{{$team['twitter']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">faceBook:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="facebook" value="{{$team['facebook']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">google-plus:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="google_plus" value="{{$team['google_plus']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">pinterest:</label>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="pinterest" value="{{$team['pinterest']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-8 col-xs-10">
                                <button type="submit" class="btn btn-primary" value="Save">Save Page</button>
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