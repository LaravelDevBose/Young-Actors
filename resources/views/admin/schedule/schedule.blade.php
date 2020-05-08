@extends('layouts.admin.admin')

@section('title', 'Schedule Page')

@section('PageCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.print.min.css') }}" media="print">
@endsection

@section('mainContainer')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Manage Calender</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">{{ (!empty($schedule))?'Update': 'Add' }} Schedule</h4>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <div class="box-body p-40">
                                @if(!empty($schedule))
                                {!! Form::open([ 'route' => ["admin.schedule.update", $schedule->schedule_id], 'method' =>'PUT', 'class'=> 'GlobalFormValidation' ]) !!}
                                @else
                                {!! Form::open([ 'route' => "admin.schedule.store", 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                                @endif
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <h5>Title <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    {!!Form::text('schedule_title', (!empty($schedule))? $schedule->schedule_title : null,
                                                       [
                                                           'class'=>'form-control form-control-lg',
                                                           'placeholder'=> 'Enter Title',
                                                           'required'=>true,
                                                           'data-validation-required-message' => 'Title is Required',
                                                       ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <h5>Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    {!!Form::text('schedule_date', (!empty($schedule))? $schedule->schedule_date : null,
                                                       [
                                                           'id'=>'datepicker',
                                                           'class'=>'form-control form-control-lg',
                                                           'placeholder'=> 'Enter Date',
                                                           'required'=>true,
                                                           'data-validation-required-message' => 'Date is Required',
                                                       ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <h5>Details <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    {!!Form::textarea('schedule_details', (!empty($schedule))? $schedule->schedule_details : null,
                                                       [
                                                           'class'=>'form-control form-control-lg',
                                                           'placeholder'=> 'Enter Details Here..',
                                                           'required'=>true,
                                                           'data-validation-required-message' => 'Details is Required',
                                                           'rows'=>2,
                                                       ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 offset-sm-8 col-md-2 offset-md-10">
                                            <div class="text-xs-right">
                                                <button type="submit" class="btn btn-rounded btn-info btn-block btn-md" >{{ (!empty($schedule))?'Update': 'Submit' }}</button>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 5px;">
                                            @include('layouts.admin.include.alert_process')
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body p-40">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

@section('PageJquery')

    <!-- fullCalendar -->
    <script src="{{ asset('assets/vendor_components/fullcalendar/lib/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>
    <!-- CrmX Admin for calendar -->
    <script src="{{ asset('assets/js/pages/calendar.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            autoclose: true,
            format:'yyyy-mm-dd'
        });
    </script>
@endsection
