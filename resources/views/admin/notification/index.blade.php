@extends('layouts.admin.admin')

@section('title', 'Notification List')

@section('PageCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/datatable/datatables.min.css') }}">
@endsection

@section('mainContainer')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Notification List</h3>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Notification List</h3>
                                <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Member Name</th>
                                            <th>Sent To</th>
                                            <th>Email Title</th>
                                            <th class="text-center">Channel</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($notifications) && count($notifications) > 0)
                                            @foreach($notifications as $notification)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $notification->user->name }}</td>
                                                    <td>{{ $notification->send_address }}</td>
                                                    <td>{{ $notification->title }}</td>
                                                    <td class="text-center">
                                                        @if($notification->channel == 1)
                                                            <span class="badge badge-primary">Email</span>
                                                        @else
                                                            <span class="badge badge-info">SMS</span>
                                                        @endif
                                                    </td>

                                                    <td class="text-center">
                                                        @if($notification->status == 1)
                                                            <span class="badge badge-info">Waiting</span>
                                                        @elseif($notification->status == 2)
                                                            <span class="badge badge-primary">Processing</span>
                                                        @elseif($notification->status == 3)
                                                            <span class="badge badge-success">Sent</span>
                                                        @elseif($notification->status == 4)
                                                            <span class="badge badge-danger">Fail</span>
                                                        @else
                                                            <span class="badge badge-dark">Undefined</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Member Name</th>
                                            <th>Sent To</th>
                                            <th>Email Title</th>
                                            <th class="text-center" >Channel</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                        </tfoot>
                                    </table>
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
    <!-- This is data table -->
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <!-- CrmX Admin for calendar -->
    <script src="{{ asset('assets/js/pages/data-table.js') }}"></script>
@endsection
