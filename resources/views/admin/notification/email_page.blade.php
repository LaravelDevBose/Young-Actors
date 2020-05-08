@extends('layouts.admin.admin')

@section('title', 'Email Notification')

@section('PageCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_plugins/iCheck/all.css') }}">
@endsection

@section('mainContainer')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Email Notification Information</h3>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                {!! Form::open([ 'route' => "admin.notify.store", 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Send Email Notification</h4>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <div class="box-body p-40">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <input type="hidden" name="channel" value="{{ \App\Models\Notification::Channels['Email'] }}">
                                        <div class="form-group">
                                            <h5>Title <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                {!!Form::text('title', null,
                                                   [
                                                       'class'=>'form-control form-control-lg',
                                                       'placeholder'=> 'Enter Email Title',
                                                       'required'=>true,
                                                       'data-validation-required-message' => 'Email Title is Required',
                                                   ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <h5>Email Body <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                {!!Form::textarea('body_text', null,
                                                   [
                                                       'class'=>'form-control form-control-lg',
                                                       'placeholder'=> 'Enter Email Body Here..',
                                                       'required'=>true,
                                                       'data-validation-required-message' => 'Email Body is Required',
                                                       'rows'=>2,
                                                   ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Member List</h3>
                                <h6 class="box-subtitle">Select Member List For Sending Notification</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="Datatable" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>User Name</th>
                                            <th>Phone No</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($members) && count($members) > 0)
                                            @foreach($members as $member)
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <input type="checkbox" name="userIds[]" id="checkbox_{{ $member->user_id }}" value="{{ $member->user_id }}">
                                                                <label for="checkbox_{{ $member->user_id }}">{{ $member->name }}</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $member->email }}</td>
                                                    <td>{{ $member->user_name }}</td>
                                                    <td>{{ $member->phone_no }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>User Name</th>
                                            <th>Phone No</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="col-xs-12 col-sm-4 offset-sm-8 col-md-2 offset-md-10">
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info btn-block btn-lg" >Send Email</button>
                                </div>
                            </div>
                            <div class="col-12" style="margin-top: 5px;">
                                @include('layouts.admin.include.alert_process')
                            </div>
                        </div>

                    </div>
                </div>
                {!! Form::close() !!}
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

@section('PageJquery')
    <!-- This is data table -->
{{--    <script src="{{ asset('assets/vendor_plugins/iCheck/icheck.min.js') }}"></script>--}}
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>
    <!-- CrmX Admin for calendar -->
    <script>
        $('#Datatable').DataTable();
    </script>
@endsection
