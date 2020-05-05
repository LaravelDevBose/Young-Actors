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
                <img src="{{ asset('assets/images/user5-128x128.jpg') }}" alt="user">
                <div class="profile-info"><h4>John Doe</h4>
                </div>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview active">
                <a href="#">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ti-files"></i>
                    <span>Class Room</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout_boxed.html"><i class="ti-more"></i>Publish Live Class</a></li>
                    <li><a href="pages/layout_fixed.html"><i class="ti-more"></i>Manage Class Schedule</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="ti-files"></i>
                    <span>Training Room</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout_fixed.html"><i class="ti-more"></i>Add Training Video</a></li>
                    <li><a href="pages/layout_collapsed_sidebar.html"><i class="ti-more"></i>Training Video List</a></li>
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
                    <li><a href="pages/layout_boxed.html"><i class="ti-more"></i>Email Notification</a></li>
                    <li><a href="pages/layout_fixed.html"><i class="ti-more"></i>SMS Notification</a></li>
                    <li><a href="pages/layout_collapsed_sidebar.html"><i class="ti-more"></i>Notification List</a></li>
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
                    <li><a href="pages/layout_boxed.html"><i class="ti-more"></i>Add Member</a></li>
                    <li><a href="pages/layout_fixed.html"><i class="ti-more"></i>Member List</a></li>
                </ul>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="ti-dashboard"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li>
                <a href="pages/auth_login.html">
                    <i class="ti-power-off"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>
</aside>
