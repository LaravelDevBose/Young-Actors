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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
                        <img src="{{ asset('assets/images/avatar/7.jpg') }}" class="user-image rounded-circle" alt="User Image">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <!-- User image -->
                        <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
                            <div class="flexbox align-self-center">
                                <img src="{{ asset('assets/images/avatar/7.jpg') }}" class="float-left rounded-circle" alt="User Image">
                                <h4 class="user-name align-self-center">
                                    <span>Samuel Brus</span>
                                    <small>samuel@gmail.com</small>
                                </h4>
                            </div>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

