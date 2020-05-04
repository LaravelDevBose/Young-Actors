@extends('layouts.customer.app')

@section('title','Customer Dashboard')

@section('PageCss')


@endsection

@section('mainContainer')
    <main id="main-container">
        <div class="content content-narrow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 offset-md-3 offset-lg-3 offset-xl-3" >
                        <div class=" js-animation-object animated bounceInLeft">
                            <div class="text-center">
                                <img class="img-fluid mb-2" src="{{ asset('assets/media/photos/little-monster.png') }}" alt="Cartoon" width="200">
                                <p>{{__('customer.welcome_msg')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if(!empty($categories))
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4" >
                                <div class="block">
                                    <div class="block-header block-header-default" style="background-color: #fcfafb !important;">
                                        <h3 class="block-title font-w700"> {{ $category->category_name }} </h3>
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ $category->image->image_path }}" alt="" style="max-height: 200px; width: 100%;">
                                    </div>
                                    <div class="block-content">
                                        <p>{{ $category->category_des }}</p>
                                    </div>
                                    @if(!empty($category->games))
                                        @foreach($category->games as $game)
                                            <div class="block-content border-top" style="padding-top: .5rem;">
                                                <a href="{{ route('user.game.show', $game->game_id) }}">
                                                    <h6 class="font-w600 text-capitalize" style="margin-bottom: .5rem; display: inline-block;">{{ $game->game_title }}</h6>
                                                    <span class="float-right text-success">
                                                        <i class="fa fa-play"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        @endforeach
                                        <div class="block-content" style="padding-top: .5rem;">
                                            <div class="progress push">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $category->user_progress }}%;" aria-valuenow="{{ $category->user_progress }}" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="font-size-sm font-w600">{{ $category->user_progress }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection

@section('PageJquery')

@endsection
