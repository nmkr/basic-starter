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

                {{ Form::open(['action' => 'AuthController@postLogin', 'method' => 'post', 'class' => 'form-signin']) }}

                     {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => Lang::get('pages.ph_email')]) }}
                     {{ Form::password('password', ['class' => 'form-control', 'placeholder' => Lang::get('pages.ph_password')]) }}

                    <div class="pull-right">
                        <div class="checkbox">
                            <label>
                                {{ Form::input('checkbox', 'remember') }} {{ Lang::get('pages.auth.remember') }}
                            </label>
                        </div>
                    </div>

                    <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="{{ Lang::get('pages.auth.login') }} »" autocomplete="off">

            </div>
            <div class="panel-footer text-center">
                <a href="{{ URL::action('RemindersController@getRemind') }}">{{ Lang::get('pages.auth.password_reset_link') }}</a>
            </div>

                {{ Form::close() }}
        </div>
    </div>
</div>
@stop