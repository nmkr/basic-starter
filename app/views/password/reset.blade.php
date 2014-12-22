@extends('layouts.login')

@section('content')

<div class="row vertical-offset-100">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="row-fluid">
                    <img src="http://fpoimg.com/120x120?text=APPLOGO" width="120" height="120" class="img-responsive" alt="" />
                </div>
            </div>

            @include('layouts/partials/_flash')

            <div class="panel-body">

                {{ Form::open(['action' => 'RemindersController@postReset', 'method' => 'post', 'class' => 'form-signin']) }}

                     {{ Form::hidden('token', $token) }}

                     {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => Lang::get('pages.ph_email')]) }}
                     {{ Form::password('password', ['class' => 'form-control', 'placeholder' => Lang::get('pages.ph_password')]) }}
                     {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => Lang::get('pages.ph_password_confirm')]) }}

                    <input class="btn btn-lg btn-success btn-block" type="submit" id="reminder" value="{{ Lang::get('pages.auth.password_reset_button') }} »">

                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>
@stop