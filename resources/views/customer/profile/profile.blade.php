@extends('layouts.customer.app')
@section('title', 'Profile Update')
@section('PageCss')

@endsection
@section('mainContainer')
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo8@2x.jpg') }});">
            <div class="bg-black-50">
                <div class="content content-full text-center">
                    <div class="my-3">
                        @if(!empty(auth()->user()->avatar))
                            <img class="img-avatar img-avatar-thumb" src="{{ auth()->user()->avatar->image_path }}" alt="">
                        @else
                            <img class="img-avatar img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar0.jpg')  }}" alt="">
                        @endif
                    </div>
                    <h1 class="h2 text-white mb-0">{{ auth()->user()->name }}</h1>
                    <span class="text-white-75">{{ auth()->user()->email }}</span>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{ __('customer.profile_update_title') }}</h3>
                        </div>
                        <div class="block-content block-content-full" id="form_field">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="font-size-sm text-muted">
                                        {{__('customer.profile_update_sub_title')}}
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    {!! Form::open([ 'route' => ['user.profile.image'], 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}

                                    <div class="row items-push">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="val-username">{{__('admin.Name')}}:<span class="text-danger">*</span></label>
                                                {!!Form::text('name',auth()->user()->name,
                                                   [
                                                       'class'=>'form-control',
                                                       'placeholder'=> __('auth.enter_name'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.nameRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">
                                                <label for="val-username">{{ __('admin.Email') }}:<span class="text-danger">*</span></label>
                                                {!!Form::email('email',auth()->user()->email,
                                                   [
                                                       'class'=>'form-control',
                                                       'placeholder'=> __('auth.enter_email'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.emailRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="val-username">{{__('admin.Image')}}:<span class="text-danger">*</span></label>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="uploadStyle  btn btn-primary btn-block btn-sm">
                                                            <p> <i class="fab fa-fw fa-instagram mr-1"></i> {{__('admin.Add Attachment')}}</p>
                                                            {!!Form::file('f',
                                                                [
                                                                    'class'=>'SocityFileUploadGallery',
                                                                    'data-fv-notempty' => false,
                                                                    'data-fv-blank' => false,
                                                                    'data-rule-required' => false,
                                                                    'data-fv-notempty-message' =>  __('admin.Category Image Required'),
                                                                    'data-folder'=>'customer',
                                                                    'data-url'=>route('master-attachment-store'),
                                                                    'accept'=>'image/*'

                                                                ]) !!}
                                                            <input type="hidden" id="isSingle" value="1">
                                                        </div>
                                                        <div class="alert alert-success alert-dismissible  col-md-10 col-lg-offset-1 pleaseWaitUpload" style="text-align: center; display: none;" role="alert">
                                                            <span class="message"><i class="fa fa-spinner"></i> Please Wait...</span>
                                                        </div>
                                                        <div class="alert alert-danger alert-dismissible  col-md-12 pleaseWaitUploadError" style="text-align: center; display: none;" role="alert">
                                                            <span class="message"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <label for="val-username">{{ __('customer.Your Avatar') }}:<span class="text-danger">*</span></label>
                                                        <div class="NewImages" >
                                                            @if(!empty(auth()->user()->avatar))
                                                                <div class=" animated fadeIn">
                                                                    <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{ auth()->user()->avatar->image_path }}" style="height: 150px">
                                                                        <img class="img-avatar img-avatar96" src="{{ auth()->user()->avatar->image_path }}" alt="">
                                                                    </a>
                                                                </div>
                                                            @else
                                                                <div class=" animated fadeIn">
                                                                    <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{ asset('assets/media/avatars/avatar0.jpg') }}" style="height: 150px">
                                                                        <img class="img-avatar img-avatar96" src="{{ asset('assets/media/avatars/avatar0.jpg') }}" alt="" >
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block">{{ __('customer.update') }}</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            @include('layouts.admin.include.alert_process')
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content-boxed">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{ __('customer.reset_pass_title') }}</h3>
                        </div>
                        <div class="block-content block-content-full" id="form_field">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="font-size-sm text-muted">
                                        {{__('customer.reset_pass_sub_title')}}
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    {!! Form::open([ 'route' => ['user.profile.password'], 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}

                                    <div class="row items-push">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="val-username">{{ __('admin.Password') }}:<span class="text-danger">*</span></label>
                                                {!!Form::password('password',
                                                   [
                                                       'class'=>'form-control',
                                                       'placeholder'=> __('auth.enter_pass'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.passwordRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">
                                                <label for="val-username">{{ __('admin.c_password') }}:<span class="text-danger">*</span></label>
                                                {!!Form::password('password_confirmation',
                                                   [
                                                       'class'=>'form-control',
                                                       'placeholder'=> __('auth.enter_c_pass'),
                                                       'data-fv-notempty' => true,
                                                       'data-fv-blank' => true,
                                                       'data-rule-required' => true,
                                                       'data-fv-notempty-message' => trans('auth.passwordRequired')
                                                   ]) !!}
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block">{{ __('customer.update') }}</button>
                                            </div>
                                        </div>
                                        <div class="block-content pt-0 mt-0 mb-0">
                                            <div class="col-sm-12" style="margin-top: 5px;">
                                                @include('layouts.admin.include.alert_process')
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('PageJquery')

@endsection
