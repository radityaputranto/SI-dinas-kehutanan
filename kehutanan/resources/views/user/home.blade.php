<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/assets/side_logo.png')}}">
    <title>Sistem Absensi dan tunjangan dinas kehutanan</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('dashboard/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('dashboard/css/colors/green.css')}}" id="theme" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="{{ asset('dashboard/plugins/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('dashboard/assets/side_logo.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('dashboard/assets/side_logo.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="{{ asset('dashboard/assets/side_text.png')}}" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="{{ asset('dashboard/assets/side_text.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                       
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and notification-->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                         <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="mdi mdi-av-timer" ></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Telat</h5> <span class="mail-desc">20 januari 2018!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="mdi mdi-weather-night"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Lembur</h5> <span class="mail-desc">22 januari 2018</span> <span class="time">9:10 PM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="mdi mdi-briefcase"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Ijin tidak masuk kerja</h5> <span class="mail-desc">28 Januari 2017</span> <span class="time">8:08 AM</span> </div>
                                            </a>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('dashboard/assets/profil.jpg')}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('dashboard/assets/profil.jpg')}}" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Raditya Putranto</h4>
                                                <p class="text-muted">radit@tes.com</p><a href="profil.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="profil.html"><i class="ti-user"></i> My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                       <!--  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">

                                                     <i class="fa fa-power-off"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    </form> -->
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> 
                                                                                           
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ asset('dashboard/assets/profil.jpg')}}" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Raditya Putranto <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <!-- <a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> -->
                                                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li>
                            <a  href="#" aria-expanded="false"><i class="mdi mdi-home-outline"></i><span class="hide-menu">Home</span></a>
                        </li>
                        <li>
                            <a  href="absensi.html" aria-expanded="false"><i class="mdi mdi-fingerprint"></i><span class="hide-menu">Absensi</span></a>
                        </li>        
                        <li>
                            <a class="has-arrow "  href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu">Tunjangan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="tun_daerah.html">Daerah</a></li>
                                <li><a href="tun_prestasi.html">Prestasi</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="uang_mkn.html" aria-expanded="false"><i class="mdi mdi-food"></i><span class="hide-menu">Uang Makan</span></a>
                        </li>
                        <li>
                            <a href="profil.html" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Profil</span></a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
               
                <!-- item-->
                <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Home</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- baris jumlah tunjangan dan uang makan yang diterima -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-info">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white">Rp. 250.000</h1>
                                <h6 class="text-white">Uang  Makan</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h1 class="font-light text-white">Rp. 1.250.000</h1>
                                <h6 class="text-white">Tunjangan Prestasi</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h1 class="font-light text-white">Rp. 1.750.000</h1>
                                <h6 class="text-white">tunjangan Daerah</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END baris jumlah tunjangan dan uang makan yang diterima -->

                <!-- calender absensi -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end calender absensi -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Raditya Putranto
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dashboard/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dashboard/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dashboard/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dashboard/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('dashboard/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dashboard/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('dashboard/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
     <!-- Calendar JavaScript -->
    <script src="{{ asset('dashboard/plugins/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/moment/moment.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/calendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/calendar/dist/cal-init.js')}}"></script>
</body>

</html>
