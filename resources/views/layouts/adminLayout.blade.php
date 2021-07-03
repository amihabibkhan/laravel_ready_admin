<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ADMIN - @yield('title', 'PATTHOBOI')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="PATTHOBOI" name="description" />
        <meta content="legenditinstitute.com" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="{{ asset('admin') }}/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <link rel="stylesheet" href="{{ asset('admin/plugins/toatstr/toastr.min.css') }}">

        <!-- App css -->
        <link href="{{ asset('admin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{ asset('admin') }}/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{ route('home') }}" class="logo">
                        <span>
                            <img src="{{ asset('admin') }}/images/logo.png" alt="" height="25">
                        </span>
                        <i>
                            <img src="{{ asset('admin') }}/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                @if(Auth::user()->profile_pic)
                                    <img src="{{ asset('storage') . '/' . Auth::user()->profile_pic }}" alt="user" class="rounded-circle">
                                @else
                                    <img src="{{ asset('admin/images/icons/businessman.svg') }}" alt="user" class="rounded-circle">
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! {{ Auth::user()->name }}</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="{{ route('adminSettingsPage') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="{{ route('adminSettingsPage') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power"></i> <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.partials.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid pt-4">

                        @yield('main_content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    {{ date('Y') }} © PATTHOBOI - DEVELOPED BY <a href="http://legenditinstitute.com/">LEGEND IT</a>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('admin') }}/js/jquery.min.js"></script>
        <script src="{{ asset('admin') }}/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('admin') }}/js/metisMenu.min.js"></script>
        <script src="{{ asset('admin') }}/js/waves.js"></script>
        <script src="{{ asset('admin') }}/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('admin/plugins/toatstr/toastr.min.js') }}"></script>

        <!-- Counter js  -->
        <script src="{{ asset('admin') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="{{ asset('admin') }}/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="{{ asset('admin') }}/plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('admin') }}/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="{{ asset('admin') }}/js/jquery.core.js"></script>
        <script src="{{ asset('admin') }}/js/jquery.app.js"></script>

        {!! Toastr::message() !!}

        <script>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error('{{ $error }}', 'Error', {
                        closeButton: true,
                        progressBar: true
                    });
                @endforeach
            @endif
        </script>

    </body>
</html>
