@extends('layouts.member.member')

@section('title', 'Class Room')

@section('PageCss')

@endsection

@section('mainContainer')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Live Class Room</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-8 offset-md-2">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h4 class="box-title">Class Room Url</h4>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- Nav tabs -->
                                <p class="text-bold text-primary">Click the Link to Join Class</p>
                                <a href="{{ $classUrl }}" target="_blank" class="text-bold text-info">{{ $classUrl }}</a>
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
