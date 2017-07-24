@extends('layouts.admin')
@section('content')
    <section class="admin_content">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div style="text-transform: uppercase" class="col-lg-offset-2 col-md-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-xs-5">
                    <label style="color: #df0031">{{ Auth::user()->name }}</label>, WELCOME TO ADMIN PANEL!
                </div>
                <div class="col-lg-7 col-md-7 col-xs-7">

                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 ">
                    <div class="form-group">
                        <label class="control-label">hidden register page:</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
