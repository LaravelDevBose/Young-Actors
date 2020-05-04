@extends('layouts.admin.admin')
@section('title', (!empty($game)) ? __('admin.Update Game') :  __('admin.Create Game'))
@section('mainContainer')
    <main id="main-container">
        <div class="content">
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{ (!empty($game)) ? __('admin.Update Game') :  __('admin.Create Game') }}</h3>
                        </div>
                        <div class="block-content block-content-full" id="form_field">
                            @if(!empty($game))
                                {!! Form::open([ 'route' => [ 'admin.game.update', $game->category_id], 'method' =>'PUT', 'class'=> 'GlobalFormValidation' ]) !!}
                            @else
                                {!! Form::open([ 'route' => [ 'admin.game.store'], 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                            @endif
                            <div class="row items-push">
                                <div class="col-md-5 offset-1">
                                    <div class="form-group">
                                        <label for="val-username">{{ __('admin.Game Title') }}<span class="text-danger">*</span></label>
                                        {!!Form::text('game_title', (!empty($game)) ? $game->game_title : null,
                                            [
                                                'class'=>'form-control border-radius-0',
                                                'placeholder'=>__('admin.Game Title'),
                                                'data-fv-notempty' => true,
                                                'data-fv-blank' => true,
                                                'data-rule-required' => true,
                                                'data-fv-notempty-message' => __('admin.Game Title Required')
                                            ]) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="val-username">{{__('admin.Game Image')}}: </label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="uploadStyle btn-block btn-info">
                                                    <p><i class="fa fa-plus"></i> {{ __('admin.Add Attachment') }}</p>
                                                    {!!Form::file('f',
                                                    [
                                                        'class'=>'SocityFileUploadGallery',
                                                        'data-fv-notempty' => true,
                                                        'data-fv-blank' => true,
                                                        'data-rule-required' => true,
                                                        'data-fv-notempty-message' => __('admin.Game Image Required'),
                                                        'data-folder'=>'game',
                                                        'data-url'=>route('master-attachment-store'),
                                                        'accept'=>'image/*'

                                                    ]) !!}
                                                    <input type="hidden" id="isSingle" value="1">
                                                </div>
                                                <div class="alert alert-success alert-dismissible  col-md-10 col-lg-offset-1 pleaseWaitUpload" style="text-align: center; display: none;" role="alert">
                                                    <span class="message"><i class="fa fa-spinner"></i> Please Wait...</span>
                                                </div>
                                                <div class="alert alert-danger alert-dismissible  col-md-12 pleaseWaitUploadError" style="text-align: center; display: none;" role="alert">
                                                    <span class="message"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="NewImages" >
                                                    @if(!empty($game))
                                                    <div class=" animated fadeIn">
                                                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{ $game->image->image_path }}" style="height: 150px">
                                                            <img class="img-fluid" src="{{ $game->image->image_path }}" alt="" style="height: 150px">
                                                        </a>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="val-username">{{ __('admin.Game Category') }}:<span class="text-danger">*</span></label>
                                        {!!Form::select('category_id', $categories, (!empty($game)) ? $game->category_id : null,
                                       [
                                           'class'=>'form-control border-radius-0 js-select2',
                                           'data-fv-notempty' => true,
                                           'data-fv-blank' => true,
                                           'data-rule-required' => true,
                                           'data-fv-notempty-message' =>  __('admin.Game Category Required')
                                       ]) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{ __('admin.Description') }}:<span class="text-danger">*</span></label>
                                        <textarea
                                            name="game_des"
                                            id="description"
                                            class="form-control"
                                            rows="3"
                                            placeholder="{{ __('admin.Description') }}"
                                        >{{  (!empty($game)) ? $game->game_des : null }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="cleaner_status">{{ __('admin.Status') }} :<span class="text-danger">*</span></label>
                                        <div class="custom-control custom-switch mb-1">
                                            {!!Form::checkbox('game_status', 1,(!empty($game)&& $game->game_status == 1)? 1:0  ,
                                            [
                                                'class'=>'custom-control-input',
                                                'id'=>'category_status',
                                            ]) !!}
                                            <label class="custom-control-label" for="category_status">{{__('admin.Active')}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block col-md-4 offset-8 ">{{ (!empty($game)) ? __('admin.Update Game') :  __('admin.Create Game') }}</button>
                                    </div>
                                </div>

                                <div class="block-content pt-0 mt-0 mb-0">
                                    <div class="col-sm-12" style="margin-top: 5px;">
                                        @include('layouts.admin.include.alert_process')
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@section('PageJquery')

@endsection
