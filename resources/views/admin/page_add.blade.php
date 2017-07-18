@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <div class="col-lg-12">
                <form action="{{route('pagesAdd')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Title:</label>
                        <div class="col-xs-6">
                            <input class="form-control"  placeholder="Input title page" type="text" name="name" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Alias:</label>
                        <div class="col-xs-6">
                            <input class="form-control"  placeholder="Input alias page" type="text" name="alias" value="{{old('alias')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Text:</label>
                        <div class="col-xs-6">
                            <textarea class="form-control ckeditor" id="text" placeholder="Input text page" name="text" >{{old('text')}}</textarea>
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
                            <button type="submit" class="btn btn-primary" value="Save">Save Page</button>
                        </div>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </section>
    <script type="javascript">
        CKEDITOR.replace('text',{ });
    </script>
@endsection()