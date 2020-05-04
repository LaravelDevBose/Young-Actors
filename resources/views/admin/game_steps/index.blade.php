@extends('layouts.admin.admin')

@section('title', __('admin.Step List'))
@section('PageCss')

@endsection
@section('mainContainer')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div style="background-color: #f9f9f9;">
                <div class="row">
                    <div class="col-xl-10 col-lg-9 col-md-9 col-sm-8">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{ __('admin.Step List') }}</h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                        <div class="block-header block-header-default text-right">
                            <a href="{{  route('admin.game_step.create', $gameId)}}" class="btn btn-sm btn-success btn-block"><i class="fa fa-plus"></i> {{ __('admin.Create Step') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-content" style="padding-bottom: 25px;">
                            @include("layouts.admin.include.alert_process")
                            <div class="table-responsive">
                                <table class="table table-sm table-inverse table-bordered " width="100%">
                                    <thead>
                                    <tr>
                                        <th>{{ __('admin.Step Title') }}</th>
                                        <th>{{ __('admin.Step Number') }}</th>
                                        <th>{{ __('admin.Step Image') }}</th>
                                        <th>{{ __('admin.Description') }}</th>
                                        <th class="text-center">{{ __('admin.Status') }}</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($gameSteps))
                                        @foreach($gameSteps as $gameStep)
                                            <tr>
                                                <td> {{ $gameStep->step_title }}</td>
                                                <td> {{ $gameStep->step_number }}</td>
                                                <td>
                                                    <img src="{{ $gameStep->image->image_path }}" alt="" style="height: 100px;">
                                                </td>
                                                <td> {{ $gameStep->step_des }} </td>
                                                <td class="text-center">
                                                    @if($gameStep->step_status == 1)
                                                        <span class="badge badge-success">{{__('admin.Active')}}</span>
                                                    @else
                                                        <span class="badge badge-warning">{{__('admin.Inactive')}}</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.game_step.edit', $gameStep->step_id) }}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-pencil-alt"></i></a>
                                                        {{--                                                        <button data-href="{{ route('admin.category.delete', $gameStep->category_id) }}" class="delete_btn btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>--}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('PageJquery')

@endsection
