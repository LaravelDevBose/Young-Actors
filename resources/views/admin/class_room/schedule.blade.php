@extends('layouts.admin.admin')

@section('title', 'Schedule Page')

@section('PageCss')
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
                        <h3 class="page-title br-0">Dashboard</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
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

    <!-- CrmX Admin for calendar -->
    <script src="{{ asset('assets/js/pages/calendar.js') }}"></script>
@endsection
