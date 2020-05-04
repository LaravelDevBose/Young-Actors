@extends('layouts.app')
@section('title', __('auth.Sign in'))

@section('PageCss')

@endsection

@section('mainContainer')
<div id="page-container">
    <main id="main-container">
        <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo6@2x.jpg') }});">
            <div class="hero-static bg-white-95">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-themed block-fx-shadow mb-0">
                                <div class="block-header">
                                    <h3 class="block-title">Login your account</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option js-tooltip-enabled" href="{{ route('register') }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Sign Up">
                                            Create new account <i class="fa fa-sign-in-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 py-lg-4">
                                        <div class="text-center">
                                            <h1 class="mb-2">Quiz</h1>
                                            <p>Login using Credential</p>
                                        </div>


                                        {!! Form::open([ 'url' => "/login", 'method' =>'POST', 'class'=> 'GlobalFormValidation js-validation-signin' ]) !!}
                                        <div class="block-content pt-0 mt-0 mb-0">
                                            <div class="col-sm-12" style="margin-top: 5px;">
                                                @include('layouts.admin.include.alert_process')
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <div class="form-group">
                                                {!!Form::email('email', null,
                                                   [
                                                       'class'=>'form-control form-control-alt form-control-lg',
                                                       'placeholder'=> 'Enter your email',
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('admin.emailIsRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">
                                                {!!Form::password('password',
                                                   [
                                                       'class'=>'form-control form-control-alt form-control-lg',
                                                       'placeholder'=> 'Enter your password',
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('admin.passwordIsRequired')
                                                   ]) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-6">
                                                <a href="{{ route('password.request') }}">{{ __('auth.Forget Your Password') }} ?</a>
                                            </div>

                                            <div class="col-6 text-right">
                                                <button type="submit" class="btn btn-md btn-success">
                                                    {{ __('auth.Sign in')  }}<i class="fa fa-fw fa-sign-in-alt mr-1"></i>
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

