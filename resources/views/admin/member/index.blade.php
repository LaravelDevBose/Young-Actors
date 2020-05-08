@extends('layouts.admin.admin')

@section('title', 'Member List')

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
                        <h3 class="page-title br-0">Member List</h3>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Member List</h3>
                                <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
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
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $member->name }}</td>
                                                        <td>{{ $member->email }}</td>
                                                        <td>{{ $member->user_name }}</td>
                                                        <td>{{ $member->phone_no }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
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
