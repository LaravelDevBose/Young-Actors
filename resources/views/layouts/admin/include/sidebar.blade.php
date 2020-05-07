<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <h3><b>{{ env('APP_NAME') }}</b>Admin</h3>
                </a>
            </div>
            <div class="profile-pic">
                <img src="{{ asset('images/user.jpg') }}" alt="user">
                <div class="profile-info"><h4>{{ strtoupper(auth()->user()->name) }}</h4>
                </div>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.class_room.schedule') }}">
                    <i class="ti-calendar"></i>
                    <span>Manage Class Schedule</span>
                </a>
            </li>

            {{--<li class="treeview">
                <a href="#">
                    <i class="ti-files"></i>
                    <span>Class Room</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.class_room.publish') }}"><i class="ti-more"></i>Publish Live Class</a></li>
                    <li><a href="{{ route('admin.class_room.schedule') }}"><i class="ti-more"></i>Manage Class Schedule</a></li>
                </ul>
            </li>--}}

            <li class="treeview">
                <a href="#">
                    <i class="ti-files"></i>
                    <span>Training Room</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.training_room.create') }}"><i class="ti-more"></i>Add Training Video</a></li>
                    <li><a href="{{ route('admin.training_room.index') }}"><i class="ti-more"></i>Training Video List</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="ti-files"></i>
                    <span>Notification</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="ti-more"></i>Email Notification</a></li>
                    <li><a href="#"><i class="ti-more"></i>SMS Notification</a></li>
                    <li><a href="#"><i class="ti-more"></i>Notification List</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="ti-files"></i>
                    <span>Member</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.member.create') }}"><i class="ti-more"></i>Add Member</a></li>
                    <li><a href="{{ route('admin.member.index') }}"><i class="ti-more"></i>Member List</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.setting.page') }}">
                    <i class="ti-dashboard"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="ti-power-off"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>
</aside>
