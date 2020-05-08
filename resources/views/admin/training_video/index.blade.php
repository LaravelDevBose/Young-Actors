@extends('layouts.admin.admin')

@section('title', 'Training Video')

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
                        <h3 class="page-title br-0">Training Video Information</h3>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">{{ (!empty($video))?'Update': 'Add' }} Training Video</h4>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <div class="box-body p-40">
                                @if(!empty($video))
                                    {!! Form::open([ 'route' => ["admin.training_video.update", $video->video_id], 'method' =>'PUT', 'class'=> 'GlobalFormValidation' ]) !!}
                                @else
                                    {!! Form::open([ 'route' => "admin.training_video.store", 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                                @endif
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <h5>Title <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                {!!Form::text('video_title', (!empty($video))? $video->video_title : null,
                                                   [
                                                       'class'=>'form-control form-control-lg',
                                                       'placeholder'=> 'Enter Title',
                                                       'required'=>true,
                                                       'data-validation-required-message' => 'Title is Required',
                                                   ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <h5>Video Url <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                {!!Form::text('video_url', (!empty($video))? $video->video_url : null,
                                                   [
                                                       'class'=>'form-control form-control-lg',
                                                       'placeholder'=> 'https://www.youtube.com/watch?v=waojlxMBZ3U',
                                                       'required'=>true,
                                                       'data-validation-required-message' => 'Video Url is Required',
                                                   ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 offset-sm-8 col-md-2 offset-md-10">
                                        <div class="text-xs-right">
                                            <button type="submit" class="btn btn-rounded btn-info btn-block btn-md" >{{ (!empty($video))?'Update': 'Submit' }}</button>
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
                            <div class="box-header with-border">
                                <h3 class="box-title">Training Video List</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Video Url</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($videos) && count($videos) > 0)
                                                @foreach($videos as $v)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $v->video_title }}</td>
                                                    <td>{{ $v->video_url }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('admin.training_video.edit', $v->video_id) }}" class="btn btn-info btn-sm "> Edit</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Video Url</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
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
    <script src="{{ asset('assets/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>
    <!-- CrmX Admin for calendar -->
    <script>
        $('#example1').DataTable();
    </script>
@endsection
