@extends('layouts.auth.app')
@section('title', __('auth.Sign in'))
@section('BgImage', asset('images/auth_bg_2.jpg'))
@section('PageCss')

@endsection

@section('mainContainer')
    <div class="auth-2-outer row align-items-center h-p100 m-0">
        <div class="auth-2 bg-gradient-classic">
            <div class="auth-logo font-size-30">
                <a href="{{ route('index') }}" class="text-white"><b>{{ env('APP_NAME') }}</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="auth-body">
                <p class="auth-msg text-white-50">Sign in to start your session</p>

                {!! Form::open([ 'route' => "login", 'method' =>'POST', 'class'=> 'GlobalFormValidation form-element' ]) !!}
                    <div class="form-group has-feedback">
                        {!!Form::email('email', null,
                           [
                               'class'=>'form-control text-white plc-white',
                               'placeholder'=> __('auth.enter_email'),
                               'data-fv-notempty' => true,
                               'data-fv-blank' => true,
                               'data-rule-required' => true,
                               'data-fv-notempty-message' => trans('auth.emailRequired')
                           ]) !!}
                        <span class="ion ion-email form-control-feedback text-white"></span>
                    </div>
                    <div class="form-group has-feedback">
                        {!!Form::password('password',
                           [
                               'class'=>'form-control text-white plc-white',
                               'placeholder'=> __('auth.enter_pass'),
                               'data-fv-notempty' => true,
                               'data-fv-blank' => true,
                               'data-rule-required' => true,
                               'data-fv-notempty-message' => trans('auth.passwordRequired'),
                               'min-length'=>6
                           ]) !!}
                        <span class="ion ion-locked form-control-feedback text-white"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        {{--<div class="col-6">
                            <div class="fog-pwd">
                                <a href="javascript:void(0)" class="text-white"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                            </div>
                        </div>--}}
                        <div class="col-12">
                            <div class="margin-top-30 text-center text-white">
                                <p>Don't have an account? <a href="{{ route('register') }}" class="text-info m-l-5">Sign Up</a></p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-rounded mt-10 btn-success">SIGN IN</button>
                        </div>
                        <!-- /.col -->
                        <div class="col-12" style="margin-top: 5px;">
                            @include('layouts.frontend.include.alert_process')
                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>

    </div>

@endsection

@section('PageJs')

@endsection

