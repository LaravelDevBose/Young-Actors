@extends('layouts.app')
@section('title', __('auth.Sign Up'))

@section('PageCss')

@endsection

@section('mainContainer')
    <div id="page-container">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero-static">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign Up Block -->
                            <div class="block block-themed block-fx-shadow mb-0">
                                <div class="block-header">
                                    <h3 class="block-title">{{ __('auth.create_your_account') }}</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option js-tooltip-enabled" href="{{ route('login') }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Sign In">
                                            Login <i class="fa fa-sign-in-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4">
                                        <div class="text-center">
                                            <h1 class="mb-2">Game</h1>
                                            <p>{{ __('auth.reg_header') }}</p>
                                        </div>
                                        {!! Form::open([ 'route' => "register", 'method' =>'POST', 'class'=> 'GlobalFormValidation js-validation-signin' ]) !!}
                                        <div class="block-content pt-0 mt-0 mb-0">
                                            <div class="col-sm-12" style="margin-top: 5px;">
                                                @include('layouts.admin.include.alert_process')
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <div class="form-group">
                                                {!!Form::text('name', null,
                                                   [
                                                       'class'=>'form-control form-control-alt form-control-lg',
                                                       'placeholder'=> __('auth.enter_name'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.nameRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">

                                                {!!Form::email('email', null,
                                                   [
                                                       'class'=>'form-control form-control-alt form-control-lg',
                                                       'placeholder'=> __('auth.enter_email'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.emailRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">

                                                {!!Form::text('code', null,
                                                   [
                                                       'class'=>'form-control form-control-alt form-control-lg',
                                                       'placeholder'=> __('auth.enter_code'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.codeRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">
                                                {!!Form::password('password',
                                                   [
                                                       'class'=>'form-control form-control-alt form-control-lg',
                                                       'placeholder'=> __('auth.enter_pass'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.passwordRequired'),
                                                       'min-length'=>6
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">
                                                {!!Form::password('password_confirmation',
                                                   [
                                                       'class'=>'form-control form-control-alt form-control-lg',
                                                       'placeholder'=> __('auth.enter_c_pass'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.cPassRequired')
                                                   ]) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-xl-5 offset-6 offset-xl-7">
                                                <button type="submit" class="btn btn-block btn-success">
                                                    <i class="fa fa-fw fa-plus mr-1"></i> {{ __('auth.Sign Up') }}
                                                </button>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                    <!-- END Sign Up Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign Up Block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
@endsection

@section('PageJs')

@endsection
