@extends('layouts.admin.admin')

@section('title', __('admin.menu.dashboard'))

@section('mainContainer')
    <main id="main-container">
        <div class="bg-image overflow-hidden">
            <div class="bg-primary-dark-op">
                <div class="content content-narrow content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                        <div class="flex-sm-fill">
                            <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">{{__('admin.menu.dashboard')}}</h1>
{{--                            <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Welkom</h2>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content-narrow">

        </div>
    </main>
    <!-- END Main Container -->
@endsection

@section('PageJquery')
@endsection
