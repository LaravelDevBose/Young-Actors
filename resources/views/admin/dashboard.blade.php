@extends('layouts.admin.admin')

@section('title', __('admin.menu.dashboard'))

@section('mainContainer')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Dashboard</h3>
                    </div>
                    <div class="right-title w-170">
					<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
						<span class="subheader_daterange-label">
							<span class="subheader_daterange-title"></span>
							<span class="subheader_daterange-date text-primary"></span>
						</span>
						<a href="#" class="btn btn-rounded btn-sm btn-primary">
							<i class="fa fa-angle-down"></i>
						</a>
					</span>
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
                                        <i class="fa fa-truck bg-success mr-0"></i>
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
                                        <h2 class="my-0 font-weight-700">27.424</h2>
                                        <p class="text-fade mb-0">Visitors Today</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bolt bg-warning mr-0"></i>
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
                                        <h2 class="my-0 font-weight-700">$ 29.200</h2>
                                        <p class="text-fade mb-0">Total Earnings</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-shopping-cart bg-danger mr-0"></i>
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
@endsection
