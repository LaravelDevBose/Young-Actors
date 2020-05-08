@extends('layouts.member.member')

@section('title', 'Profile Page')

@section('PageCss')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dev_bose.css')}}">
@endsection

@section('mainContainer')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Profile</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-8 offset-md-2">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h4 class="box-title">Update Your Details</h4>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- Nav tabs -->
                                <div class="vtabs">
                                    <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#details" role="tab">
                                                <span class="hidden-sm-up"><i class="ion-home"></i></span>
                                                <span class="hidden-xs-down">Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#password" role="tab">
                                                <span class="hidden-sm-up"><i class="ion-person"></i></span>
                                                <span class="hidden-xs-down">Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content" style="width: 90%;">
                                        <div class="tab-pane active" id="details" role="tabpanel">
                                            {!! Form::open([ 'route' => "member.details.update", 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                                            <div class="row">
                                                <div class="col-sm-10 offset-sm-1 col-md-6 ">
                                                    <div class="form-group">
                                                        <h5>Full Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            {!!Form::text('name', auth()->user()->name,
                                                               [
                                                                   'class'=>'form-control form-control-lg',
                                                                   'placeholder'=> 'Enter Full Name',
                                                                   'required'=>true,
                                                                   'data-validation-required-message' => 'Full Name is Required',
                                                               ]) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 offset-sm-1 col-md-6 ">
                                                    <div class="form-group">
                                                        <h5>Phone No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            {!!Form::text('phone_no', auth()->user()->phone_no,
                                                               [
                                                                   'class'=>'form-control form-control-lg',
                                                                   'placeholder'=> 'Enter Phone No',
                                                                   'required'=>true,
                                                                   'data-validation-required-message' => 'Phone No is Required',
                                                               ]) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 offset-sm-1 col-md-6 ">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div class="uploadStyle btn-block btn-info">
                                                                <p><i class="fa fa-plus"></i> {{ __('admin.Add Attachment') }}</p>
                                                                {!!Form::file('f',
                                                                [
                                                                    'class'=>'SocityFileUploadGallery',
                                                                    'data-fv-notempty' => true,
                                                                    'data-fv-blank' => true,
                                                                    'data-rule-required' => true,
                                                                    'data-fv-notempty-message' => __('admin.Game Image Required'),
                                                                    'data-folder'=>'user',
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

                                                        <div class="col-lg-5">
                                                            <div class="NewImages" >
                                                                @if(!empty($member->avatar))
                                                                    <div class=" animated fadeIn">
                                                                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{ $member->avatar->image_path }}" style="height: 150px">
                                                                            <img class="img-fluid" src="{{ $member->avatar->image_path }}" alt="" style="height: 150px">
                                                                        </a>
                                                                    </div>

                                                                @else
                                                                    <div class="animated fadeIn">
                                                                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{ asset('images/user.jpg') }}" style="height: 150px">
                                                                            <img class="img-fluid" src="{{ asset('images/user.jpg') }}" alt="" style="height: 150px">
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-xs-8  col-sm-4 offset-sm-8 offset-sm-2">
                                                    <div class="text-xs-right">
                                                        <button type="submit" class="btn btn-rounded btn-info btn-block btn-md" >Update Details</button>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 5px;">
                                                    @include('layouts.member.include.alert_process')
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="tab-pane" id="password" role="tabpanel">
                                            {!! Form::open([ 'route' => "member.password.update", 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                                            <div class="row">
                                                <div class="col-sm-10 offset-sm-1 col-md-6 ">
                                                    <div class="form-group">
                                                        <h5>New Password<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            {!!Form::password('password',
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> __('auth.enter_pass'),
                                                               'required' => true,
                                                               'data-validation-required-message' => trans('auth.passwordRequired'),
                                                               'min-length'=>6
                                                           ]) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 offset-sm-1 col-md-6 ">
                                                    <div class="form-group">
                                                        <h5>Confirm Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            {!!Form::password('password_confirmation',
                                                           [
                                                               'class'=>'form-control form-control-lg',
                                                               'placeholder'=> __('auth.enter_c_pass'),
                                                               'required' => true,
                                                               'data-validation-match-match' => 'password',
                                                               'data-validation-required-message' => trans('auth.cPassRequired'),
                                                           ]) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8  col-sm-4 offset-sm-8 offset-sm-2">
                                                    <div class="text-xs-right">
                                                        <button type="submit" class="btn btn-rounded btn-info btn-block btn-md" >Update Password</button>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 5px;">
                                                    @include('layouts.member.include.alert_process')
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

@section('PageJquery')
    <script src="{{ asset('assets/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>

    {!! Html::script('vendor/fileupload/jquery.fileuploadmulti.min.js') !!}
    {!! Html::script('vendor/fileupload/img_saving_gallery.js') !!}
@endsection
