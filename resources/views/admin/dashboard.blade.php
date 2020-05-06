@extends('layouts.admin.admin')

@section('title', __('admin.menu.dashboard'))

@section('PageCss')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- owlcarousel-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/OwlCarousel2/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.css') }}">
    <!-- Chartist-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/chartist-js-develop/chartist.css') }}">
    <!-- c3 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor_components/c3/c3.min.css') }}">
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
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="box">
                            <div class="box-body p-40">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h2 class="my-0 font-weight-700">4.562</h2>
                                        <p class="text-fade mb-0">Sales Today </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-dollar bg-success mr-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="box">
                            <div class="box-body p-40">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h2 class="my-0 font-weight-700">$27.424</h2>
                                        <p class="text-fade mb-0">Total Sales</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-dollar bg-warning mr-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="box">
                            <div class="box-body p-40">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h2 class="my-0 font-weight-700">29</h2>
                                        <p class="text-fade mb-0">Total Members</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-users bg-danger mr-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="box">
                            <div class="box-body p-40">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h2 class="my-0 font-weight-700">45</h2>
                                        <p class="text-fade mb-0">Pending Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bullhorn bg-success mr-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">
                                    Overview
                                </h4>
                            </div>
                            <div class="box-body pt-0">
                                <div id="yearly-comparison"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Revenue</h4>
                                <div class="box-controls pull-right">
                                    <span class="badge badge-pill badge-light px-10">Year</span>
                                    <span class="badge badge-pill badge-light px-10 mx-10">Day</span>
                                    <span class="badge badge-pill badge-primary px-10">Month</span>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <div id="myChart"></div>
                                </div>
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
    <!-- Plugin -->
    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/zingchart_branded_version/zingchart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/maps.js"></script>
    <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/dataviz.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endsection
