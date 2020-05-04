@extends('layouts.admin.admin')

@section('title', __('admin.User List'))
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
                            <h3 class="block-title">{{ __('admin.User List')}}</h3>
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
                                        <th class="text-center">{{  __('admin.Image')  }}</th>
                                        <th>{{  __('admin.Name')  }}</th>
                                        <th>{{  __('admin.Email')  }}</th>
                                        <th class="text-center">{{  __('admin.Status')  }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($users))
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="text-center">
                                                    @if(!empty($user->avatar))
                                                        <img src="{{ $user->avatar->image_path }}" class="img-avatar" alt="" style="height: 50px;">
                                                    @else
                                                        <img src="{{asset('assets/media/photos/photo1.jpg') }}" class="img-avatar" alt="" style="height: 50px;">
                                                    @endif
                                                </td>
                                                <td> {{ $user->name }}</td>
                                                <td> {{ $user->email }} </td>
                                                <td class="text-center">
                                                    @if($user->status == 1)
                                                        <span class="badge badge-success">{{ __('admin.Active') }}</span>
                                                    @elseif($user->status == 2)
                                                        <span class="badge badge-warning">{{ __('admin.Inactive') }}</span>
                                                    @elseif($user->status == 3)
                                                        <span class="badge badge-danger">{{ __('admin.Expired') }}</span>
                                                    @endif
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
