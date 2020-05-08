@extends('layouts.admin.admin')

@section('title', 'Setting Page')

@section('PageCss')

@endsection

@section('mainContainer')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Setting</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h4 class="box-title">Update Your Setting</h4>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- Nav tabs -->
                                <div class="vtabs">
                                    <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#classUrl" role="tab">
                                                <span class="hidden-sm-up"><i class="ion-home"></i></span>
                                                <span class="hidden-xs-down">Live Class Url</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
                                                <span class="hidden-sm-up"><i class="ion-person"></i></span>
                                                <span class="hidden-xs-down">Notification</span>
                                            </a>
                                        </li>
                                        {{--<li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages4" role="tab">
                                                <span class="hidden-sm-up"><i class="ion-email"></i></span>
                                                <span class="hidden-xs-down">Messages</span>
                                            </a>
                                        </li>--}}
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content" style="width: 90%;">
                                        <div class="tab-pane active" id="classUrl" role="tabpanel">
                                            {!! Form::open([ 'route' => "admin.setting.class_url", 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h5>Full Path of Live Class Your <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            {!!Form::textarea('class_url', !empty($classUrl)? $classUrl: '',
                                                               [
                                                                   'class'=>'form-control form-control-lg',
                                                                   'placeholder'=> 'Enter Live Class Url Here..',
                                                                   'required'=>true,
                                                                   'data-validation-required-message' => 'Class Url is Required',
                                                                   'rows'=>2,
                                                               ]) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-2 offset-sm-10">
                                                    <div class="text-xs-right">
                                                        <button type="submit" class="btn btn-rounded btn-info btn-block btn-md" >Update</button>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 5px;">
                                                    @include('layouts.admin.include.alert_process')
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="tab-pane" id="notification" role="tabpanel">
                                            <div class="p-15">
                                                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                                                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                                            </div>
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


@endsection
