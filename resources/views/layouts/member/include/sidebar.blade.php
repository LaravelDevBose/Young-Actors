<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ route('index') }}">
                    <!-- logo for regular state and mobile devices -->
                    <h3><b>{{ env('APP_NAME') }}</b></h3>
                </a>
            </div>
            <div class="profile-pic">
                @if(auth()->user()->avatar)
                    <img src="{{ auth()->user()->avatar->image_path }}" alt="{{ auth()->user()->user_name }}" class="rounded-circle">
                @else
                    <img src="{{ asset('images/user.jpg') }}" alt="{{ auth()->user()->user_name }}" class="rounded-circle">
                @endif
                <div class="profile-info"><h4>{{ strtoupper(auth()->user()->name) }}</h4>
                </div>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="">
                <a href="{{ route('member.dashboard') }}">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('member.profile.page') }}">
                    <i class="ti-calendar"></i>
                    <span>My Profile</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('member.class.room') }}">
                    <i class="ti-calendar"></i>
                    <span>Live Class Room</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('member.training.room') }}">
                    <i class="ti-user"></i>
                    <span>Training Room</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="ti-dashboard"></i>
                    <span>Download</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="ti-power-off"></i>
                    <span>Sign Out</span>
                </a>
            </li>

        </ul>
    </section>
</aside>
