<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header bg-warning">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <!-- User Dropdown -->

            <div class="dropdown d-inline-block ml-2">


                <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="si si-user"></i>
                    <span class="d-none d-sm-inline-block ml-1">{{ \Auth::user()->full_name }}</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                    <div class="p-3 text-center bg-primary text-white d-block d-sm-none d-none d-sm-block d-md-none">
                        {{ \Auth::user()->full_name }}
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('user.profile.index') }}">
                            <span>{{ __('menu.update_profile') }}</span><i class="si si-settings ml-1"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <span>{{__('menu.logout')}}</span><i class="si si-logout ml-1"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->


    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-white">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-circle-notch fa-spin"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
