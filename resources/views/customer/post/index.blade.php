@extends('layouts.customer.app')

@section('title', 'Post List')
@section('PageCss')

@endsection
@section('mainContainer')
    <main id="main-container">
        <div class="content content-narrow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if(session()->get('error'))
                            <div class="alert alert-danger">
                                <span>{{ session()->get('error') }}</span>
                            </div>
                        @endif
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                <span>{{ session()->get('success') }}</span>
                            </div>
                        @endif
                    </div>
                </div>
                @if(!empty($posts) && count($posts) > 0)
                <ul class="timeline timeline-alt">
                    <!-- Photos Event -->
                    @foreach($posts as $post)
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-success">
                            <i class="fa fa-images"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">{{ $post->game->game_title }}</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item font-size-sm font-w600">
                                        {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="media font-size-sm">
                                    <a class="img-link mr-2" href="javascript:void(0)">
                                        @if(!empty($post->user->avatar))
                                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ $post->user->avatar->image_path }}" alt="" >
                                        @else
                                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar0.jpg') }}" alt="">
                                        @endif
                                    </a>
                                    <div class="media-body">
                                        <p>
                                            <a class="font-w600" href="javascript:void(0)">{{ $post->user->name }}</a>
                                        </p>
                                        @if(!empty($post->image))
                                        <div>
                                            <img src="{{ $post->image->image_path }}" alt="" style="max-width: 100%; max-height: 250px;">
                                        </div>
                                        @endif
                                        <p class="mt-2">{{ $post->post }}</p>
                                        <p>
                                            <a class="text-dark mr-2" href="{{ route('user.post.like', $post->post_id) }}">
                                                <i class="fa fa-heart fa-fw  {{ (in_array(auth()->id(), $post->likes->pluck('user_id')->toArray()))?'text-danger':'text-muted' }}"></i> Like ({{ count($post->likes) }})
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </main>
@endsection

@section('PageJquery')

@endsection
