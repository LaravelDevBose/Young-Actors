@extends('layouts.member.member')

@section('title', 'Member Dashboard')

@section('PageCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.print.min.css') }}" media="print">
    <style>
        .media-list-hover > .media:not(.media-list-header):not(.media-list-footer):hover, .media-list-hover .media-list-body > .media:hover{
            color: #fff;
        }

    </style>
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
                    <div class="col-sm-12 col-md-7">
                        <div class="box">
                            <div class="embed-responsive embed-responsive-16by9">
                                @if(!empty($trainingVideo))
                                    <iframe src="{{ $trainingVideo->video_url }}" allowfullscreen=""></iframe>
                                @else
                                    <iframe src="https://www.youtube.com/embed/4BWxQ4bPajk" allowfullscreen=""></iframe>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Resent Notifications</h4>
                            </div>
                            <div class="box-body p-0">
                                <div class="media-list media-list-hover">
                                    <a class="media media-single" href="#">
                                        <h4 class="w-50 text-gray font-weight-500">08:40</h4>
                                        <div class="media-body pl-15 bl-5 rounded border-success">
                                            <p>Proin iaculis eros non odio ornare efficitur.</p>
                                            <span class="text-fade">by Amla</span>
                                        </div>
                                    </a>

                                    <a class="media media-single" href="#">
                                        <h4 class="w-50 text-gray font-weight-500">07:10</h4>
                                        <div class="media-body pl-15 bl-5 rounded border-info">
                                            <p>In mattis mi ut posuere consectetur.</p>
                                            <span class="text-fade">by Josef</span>
                                        </div>
                                    </a>

                                    <a class="media media-single" href="#">
                                        <h4 class="w-50 text-gray font-weight-500">01:15</h4>
                                        <div class="media-body pl-15 bl-5 rounded border-danger">
                                            <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                            <span class="text-fade">by Rima</span>
                                        </div>
                                    </a>

                                    <a class="media media-single" href="#">
                                        <h4 class="w-50 text-gray font-weight-500">23:12</h4>
                                        <div class="media-body pl-15 bl-5 rounded border-warning">
                                            <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                            <span class="text-fade">by Alaxa</span>
                                        </div>
                                    </a>

                                </div>
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
    <script src="{{ asset('assets/vendor_components/fullcalendar/lib/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/calendar.js') }}"></script>
@endsection
