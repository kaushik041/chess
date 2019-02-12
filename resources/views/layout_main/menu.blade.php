<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="assets/img/user.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <div>Jonny <strong>Deen</strong></div>
                        {{-- <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div> --}}
                        <a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="selected">
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Tournament<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add_tournament')}}">Add Tournament</a>
                    </li>
                    <li>
                        <a href="{{url('/admin_tournament_list')}}">Tournament List</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/user_list')}}">User List</a>
                    </li>
                    <li>
                        <a href="{{url('/transaction_list')}}">Transaction List</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
