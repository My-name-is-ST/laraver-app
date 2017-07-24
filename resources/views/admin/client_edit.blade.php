@extends('layouts.admin')

@section('content')
    @if(isset($client))
        <section class="admin_content">
            <div class="container">
                <div class="row">
                    <form method="post" action="{{route('clientEdit',['client'=>$client['id']])}}" enctype="multipart/form-data">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-xs-4 control-label">title:</label>
                                <div class="col-xs-6">
                                    <input class="form-control" name="alias" value="{{$client['alias']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-4 control-label">link:</label>
                                <div class="col-xs-6">
                                    <input class="form-control" name="link" value="{{$client['link']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-4 control-label">Old Image:</label>
                                <div class="col-xs-6">
                                    <img style="background-color: #df0031;max-height: 150px; max-width: 150px; align-self: center" src="{{asset('/img/'.$client['icon'])}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden"  name="old_icon" value="{{$client['icon']}}">
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
    @endif
@endsection