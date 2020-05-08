<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('index') }}" class="logo">
        <!-- mini logo -->
        <div class="logo-mini">
            <span class="light-logo"><img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo"></span>
            <span class="dark-logo"><img src=".{{ asset('assets/images/logo-dark.png') }}" alt="logo"></span>
        </div>
        <!-- logo-->
        <div class="logo-lg">
            <span class="light-logo"><img src="{{ asset('assets/images/logo-dark-text.png') }}" alt="logo"></span>
            <span class="dark-logo"><img src="{{ asset('assets/images/logo-dark-text.png') }}" alt="logo"></span>
        </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" style="background: #22b59a;">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="ti-align-left"></i>
            </a>

            <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
                <i class="mdi mdi-crop-free"></i>
            </a>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="{{ strtoupper(auth()->user()->name) }}">
                        @if(auth()->user()->avatar)
                            <img src="{{ auth()->user()->avatar->image_path }}" alt="{{ auth()->user()->user_name }}" class="user-image rounded-circle">
                        @else
                            <img src="{{ asset('images/avatar.jpg') }}" class="user-image rounded-circle" alt="{{ auth()->user()->user_name }}">
                        @endif

                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <!-- User image -->
                        <li class="user-header bg-img" style="background: #22b59a; " data-overlay="3">
                            <div class="flexbox align-self-center">
                                @if(auth()->user()->avatar)
                                    <img src="{{ auth()->user()->avatar->image_path }}" alt="{{ auth()->user()->user_name }}" class="float-left rounded-circle">
                                @else
                                    <img src="{{ asset('images/avatar.jpg') }}" class="float-left rounded-circle" alt="{{ auth()->user()->user_name }}">
                                @endif
                                <h4 class="user-name align-self-center">
                                    <span>{{ strtoupper(auth()->user()->name) }}</span>
                                    <br>
                                    <small>{{ auth()->user()->email }}</small>
                                </h4>
                            </div>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <a class="dropdown-item" href="{{ route('member.profile.page') }}"><i class="ion ion-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="ion-log-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

