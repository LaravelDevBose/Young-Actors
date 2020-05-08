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
                        <h3 class="page-title br-0">Training Room</h3>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    @if(!empty($trainingVideos) && count($trainingVideos) > 0)
                        @foreach($trainingVideos as $video)
                            <div class="col-sm-12 col-md-4 ">
                                <div class="box">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="{{ $video->video_url }}" allowfullscreen=""></iframe>
                                    </div>

                                    <div class="box-body">
                                        <h4><a class="hover-primary" href="#">{{ $video->video_title }}</a></h4>
                                        <p>{{ \Carbon\Carbon::parse($video->created_at)->format('M d Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-sm-12 col-md-8 offset-md-2">
                            <div class="box box-default">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- Nav tabs -->
                                    <p class="text-bold text-primary">No Training Video Found</p>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    @endif
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

@section('PageJquery')

@endsection
