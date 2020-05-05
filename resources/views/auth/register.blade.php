@extends('layouts.auth.app')
@section('title', __('auth.Sign Up'))
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
                <p class="auth-msg text-white-50">Register a new Membership</p>

                {!! Form::open([ 'route' => "register", 'method' =>'POST', 'class'=> 'GlobalFormValidation form-element' ]) !!}

                    <div class="form-group has-feedback">
                        {!!Form::text('name', null,
                           [
                               'class'=>'form-control  text-white plc-white',
                               'placeholder'=> __('auth.enter_name'),
                               'data-fv-notempty' => true,
                               'data-fv-blank' => true,
                               'data-rule-required' => true,
                               'data-fv-notempty-message' => trans('auth.nameRequired')
                           ]) !!}
                        <span class="ion ion-person form-control-feedback text-white"></span>
                    </div>
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
                    <div class="form-group has-feedback">
                        {!!Form::password('password_confirmation',
                           [
                               'class'=>'form-control text-white plc-white',
                               'placeholder'=> __('auth.enter_c_pass'),
                               'data-fv-notempty' => true,
                               'data-fv-blank' => true,
                               'data-rule-required' => true,
                               'data-fv-notempty-message' => trans('auth.cPassRequired')
                           ]) !!}
                        <span class="ion ion-log-in form-control-feedback text-white"></span>
                    </div>
                    <div class="row">
                        {{--<div class="col-12">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_1" >
                                <label for="basic_checkbox_1" class=" text-white">I agree to the <a href="#" class="text-danger"><b>Terms</b></a></label>
                            </div>
                        </div>--}}
                        <div class="col-12">
                            <div class="margin-top-30 text-center text-white">
                                <p>Already have an account? <a href="{{ route('login') }}" class="text-info m-l-5">Sign In</a></p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-rounded mt-10 btn-success">SIGN UP</button>
                        </div>
                        <!-- /.col -->
                    </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection

@section('PageJs')

@endsection
