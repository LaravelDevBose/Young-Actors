@extends('layouts.customer.app')

@section('title', 'Show Game')

@section('PageCss')
    <style>
        .timeline{
            padding: 0!important;
        }
        .timeline::before{
            left: 47%!important;
        }
        .timeline-event-icon{
            left: 37% !important;
            width: auto;
            height: max-content;
            padding: 6px 20px;
            font-size: 15px;
            line-height: 1.2;
        }
        .timeline-event-block{
            margin-left: 0;
        }
        .timeline-event:first-child{
            padding-top: 0!important;
        }
        .timeline-event{
            padding-top: 60px;
        }
        .game .timeline-event-icon{
            bottom: -15px!important;
            left: 28% !important;
        }
        .timeline::before{
            background-color: #ffffff;
        }
        html {
            scroll-behavior: smooth;
        }
        ul.timeline:before{left: 50% !important;}
        ul.timeline .timelineBtn, ul.timeline .timelineBtn:focus, ul.timeline .timelineBtn:active {
            left: 0 !important;
            width: 180px;
            margin: 0 auto -15px;
            display: block;
            position: relative;
            background-color: #ff561b;
            border: 1px solid #ff561b;
            outline: none;
        }
        ul.timeline .timelineBtn.btn-success, ul.timeline .timelineBtn.btn-success:focus, ul.timeline .timelineBtn.btn-success:active {
            margin: 0 auto;
            background-color: #00c278;
            border-color: #00c278;
            padding: 10px 0;
            outline: none;
        }
        ul.timeline {
            max-width: 800px;
            margin: 0 auto 1rem;
        }
        .nextStepBtn {
            width: 32px;
            height: 32px;
            background: url(/icon/downArrow.png) #59c47c no-repeat;
            display: block;
            background-position: center;
            border-radius: 50%;
            right: 15px;
            position: absolute;
            bottom: -16px;
        }
        .timeline-event-block.block {
            border-radius: 20px;
        }
        .uploadStyle.btn.btn-primary, .uploadStyle.btn.btn-primary:active, .uploadStyle.btn.btn-primary:focus{
            background: #fff;
            color: #96ace0;
            padding: 0;
            border-color: #96ace0;
        }
        .uploadStyle input {
            cursor: pointer;
            opacity: 0;
            padding: 13px 0 0px;
            width: 100%;
            color: #96ace0;
        }
        .uploadStyle > p {
            color: #96ace0;
        }
        .submitBtnFinal, .submitBtnFinal:active, .submitBtnFinal:focus {
            background-color: #daf6e6;
            color: #235428;
            padding: 10px 14px;
            margin: 0 auto -60px;
        }
    </style>
@endsection
@section('mainContainer')
    <main id="main-container">
        <div class="content" style="padding-bottom: 60px;">
            <div class="row">
                <div class="col-md-12 col-xl-12" style="padding-top: 10px;">
                    <ul class="timeline ">
                        <li class="timeline-event game">
                            <div class="timeline-event-block block invisible " style="padding-bottom: 15px" data-toggle="appear">
                                <div class="block-header block-header-default text-center" style="background-color: #fcfafb !important;">
                                    <h3 class="block-title font-w700 text-success font-size-h1"> {{ $game->game_title }} </h3>
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{ $game->image->image_path }}" alt="" style="max-height: 200px; width: 100%;">
                                </div>
                                <div class="block-content" style="padding-bottom: 15px;">
                                    <p>{{ $game->game_des }}</p>
                                    <p>
                                        @if(!empty($game->author->avatar))
                                            <img src="{{ $game->author->avatar->image_path }}" alt="" class="img img-avatar" style="max-height: 40px; max-width: 40px;">
                                        @else
                                            <img src="{{asset('assets/media/avatars/avatar0.jpg') }}" alt="" class="img img-avatar" style="max-height: 40px; max-width: 40px;">
                                        @endif
                                        <span class="px-3">{{ $game->author->name }}</span>
                                        <span class="px-3">{{ $game->category->category_name }}</span>
                                    </p>
                                    @include('layouts.admin.include.alert_process')
                                </div>
                                <div >
                                    <a  href="#Step1" {{ (!empty($playGame))?'disabled':'' }} class="btn btn-sm btn-success timelineBtn ">
                                        <i class="fa fa-fw fa-plus mr-1"></i>
                                        {{ __('customer.Start Activity') }}
                                    </a>
                                </div>
                            </div>
                        </li>
                        @if(!empty($game->steps))
                            <?php $i=1;?>
                            @foreach($game->steps as $step)
                                <li class="timeline-event" id="Step{{ $i }}">
                                    <?php $i++;?>
                                    <a href="#Step{{ $i }}" class="timeline-event-icon btn btn-sm btn-danger timelineBtn"  >
                                        Step {{$loop->iteration}}
                                    </a>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-content" style="padding-top: 2.25rem!important;;">
                                            <img class="img-avatar-thumb" src="{{ $step->image->image_path }}" alt="" style="max-height: 200px; max-width: 100%; height: auto; width: 100%;">
                                            <p>
                                                {{ $step->step_des }}
                                            </p>
                                            <a class="nextStepBtn"  href="#Step{{ $i }}"></a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                        <li class="timeline-event" id="Step{{ $i }}">
                            <div class="timeline-event-icon btn btn-sm btn-danger timelineBtn"  >
                                {{ __('customer.Finish') }}
                            </div>
                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                {!! Form::open([ 'route' => [ 'user.post.store'], 'method' =>'POST', 'class'=> 'GlobalFormValidation' ]) !!}
                                <div class="block-content" style="padding-top: 2.25rem!important; display: block;">

                                    @if(!empty($playGame) && $playGame->is_end == 1)
                                        <div class="alert alert-info">
                                            <span>{{ __('customer.already finish game') }}</span>
                                        </div>
                                    @else
                                        <p style="font-size: 14px;">{{__('customer.finish text')}}  </p>

                                        <div class="row items-push text-center">
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <div class="row">
                                                        <div class="col-md-6 offset-md-3">
                                                            <div class="uploadStyle  btn btn-primary btn-block btn-sm">
                                                                <p> <i class="fab fa-fw fa-instagram mr-1"></i> Add Attachments</p>
                                                                <input accept="image/*" type="file" class="SocityFileUploadGallery" data-folder='game' data-url='{{ route('master-attachment-store') }}'>
                                                                <input type="hidden" id="isSingle" value="1">
                                                            </div>
                                                            <div class="alert alert-success alert-dismissible  col-md-10 col-lg-offset-1 pleaseWaitUpload" style="text-align: center; display: none;" role="alert">
                                                                <span class="message"><i class="fa fa-spinner"></i> Please Wait...</span>
                                                            </div>
                                                            <div class="alert alert-danger alert-dismissible  col-md-12 pleaseWaitUploadError" style="text-align: center; display: none;" role="alert">
                                                                <span class="message"></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="NewImages" >

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <textarea class="form-control"  rows="3" name="post" placeholder="Enter a note.."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg custom-control-info mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="example-cb-custom-square-lg2" name="is_public" value="1">
                                                    <label class="custom-control-label" style="    color: #5c7fd2;" for="example-cb-custom-square-lg2">{{ __('customer.public post') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4 offset-md-3 offset-xl-4">
                                                <input type="hidden" name="game_id" value="{{ $game->game_id }}">
                                                <button type="submit" class="btn btn-rounded submitBtnFinal"><i class="si si-rocket "></i> {{ __('customer.post') }}</button>
                                            </div>

                                        </div>
                                    @endif
                                </div>
                                <div class="block-content pt-0 mt-0 mb-0">
                                    <div class="col-sm-12" style="margin-top: 5px;">
                                        <div class="alertBox hidden mt-5 pt-3" id="error">
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close alertClose">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <span class="message"></span>
                                            </div>
                                        </div>
                                        <div class="alertBox hidden mt-5 pt-3" id="success">
                                            <div class="alert alert-success alert-dismissible " role="alert">
                                                <button type="button" class="close alertClose">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <span class="message"></span>
                                            </div>
                                        </div>
                                        <div class="alertBox hidden mt-5 pt-3" id="please-wait">
                                            <div class="alert alert-info alert-dismissible " role="alert" style=" background: rgba(58, 241, 132, 0.31); padding: 15px 0 5px;">
                                                <button type="button" class="close alertClose">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <span class="message">
                                                    <div class="spinner">
                                                        <div class="bounce1"></div>
                                                        <div class="bounce2"></div>
                                                        <div class="bounce3"></div>
                                                    </div>
                                                    <p class="alertPleaseWait"> aan het laden ...</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </li>
                    </ul>
                    <!-- END Timeline -->
                </div>
            </div>
        </div>
    </main>
@endsection

@section('PageJquery')
@endsection
