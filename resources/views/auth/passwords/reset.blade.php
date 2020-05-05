@extends('layouts.frontend.app')
@section('title', __('auth.Reset password'))

@section('PageCss')

@endsection

@section('mainContainer')
    <div id="page-container">
        <main id="main-container">
            <div class="bg-image">
                <div class="hero-static bg-white-95">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <!-- Sign In Block -->
                                <div class="block block-themed block-fx-shadow mb-0">
                                    <div class="block-header">
                                        <h3 class="block-title">{{ __('auth.Reset password') }}</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="p-sm-3 px-lg-4 py-lg-4">
                                            <div class="text-center">
                                                <h1 class="mb-2">{{__('customer.Title')}}</h1>
                                                <p>{{ __('auth.Reset account password') }}</p>
                                            </div>

                                            {!! Form::open([ 'url' => route('password.update'), 'method' =>'POST', 'class'=> 'GlobalFormValidation js-validation-signin' ]) !!}
                                            <input type="hidden" name="token" value="{{ $token }}">
                                            <div class="block-content pt-0 mt-0 mb-0">
                                                <div class="col-sm-12"  style="margin-top: 5px;">
                                                    @include('layouts.admin.include.alert_process')
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <div class="form-group">
                                                    {!!Form::email('email', $email ?? old('email'),
                                                       [
                                                           'class'=>'form-control form-control-alt form-control-lg',
                                                           'placeholder'=> __('auth.enter_email'),
                                                           'data-fv-notempty' => true,
                                                           'data-fv-blank' => true,
                                                           'data-rule-required' => true,
                                                           'data-fv-notempty-message' => __('auth.emailRequired')
                                                       ]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!!Form::password('password',
                                                       [
                                                           'class'=>'form-control form-control-alt form-control-lg',
                                                           'placeholder'=> __('auth.enter_email'),
                                                           'data-fv-notempty' => true,
                                                           'data-fv-blank' => true,
                                                           'data-rule-required' => true,
                                                           'data-fv-notempty-message' => __('auth.passwordRequired')
                                                       ]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!!Form::password('password_confirmation',
                                                       [
                                                           'class'=>'form-control form-control-alt form-control-lg',
                                                           'placeholder'=> __('auth.enter_email'),
                                                           'data-fv-notempty' => true,
                                                           'data-fv-blank' => true,
                                                           'data-rule-required' => true,
                                                           'data-fv-notempty-message' => __('auth.cPassRequired')
                                                       ]) !!}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" class="btn btn-md btn-success">
                                                        {{ __('auth.Reset password') }} <i class="fa fa-fw fa-sign-in-alt mr-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sign In Block -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Footer -->
        </main>
        <!-- END Main Container -->
        <div id="loader" style="display: none">
            <div class="w-100 text-center"><i class="fa fa-fw fa-circle-notch fa-spin"></i></div>
        </div>
    </div>
@endsection

@section('PageJs')

@endsection
