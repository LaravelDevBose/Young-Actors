<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header bg-white-5">
        <a class="font-w600 text-dual" href="{{ route('home') }}">
            <i class="fa fa-circle-notch text-primary"></i>
            <span class="smini-hide"><span class="font-w700 font-size-h5">{{ __('customer.Title') }}</span></span>
        </a>
        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('home') }}">
                    <i class="nav-main-link-icon fa fa-tachometer-alt"></i>
                    <span class="nav-main-link-name">{{ __('menu.dashboard') }}</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('user.game.index') }}">
                    <i class="nav-main-link-icon fas fa-folder-open"></i>
                    <span class="nav-main-link-name">{{__('menu.game_list')}}</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('user.post.index') }}">
                    <i class="nav-main-link-icon fas fa-list"></i>
                    <span class="nav-main-link-name">{{ __('menu.post_list') }}</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
