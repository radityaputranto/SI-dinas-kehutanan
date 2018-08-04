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
    <!-- Footable CSS -->
    <link href="{{ asset('dashboard/plugins/footable/css/footable.core.css')}}" rel="stylesheet">
    <link href="{{ asset('dashboard/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('dashboard/css/colors/green-dark.css')}}" id="theme" rel="stylesheet">
    <!-- drop upload -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/dropify/dist/css/dropify.min.css')}}">
    <!-- clock [picker] -->
    <link href="{{ asset('dashboard/plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
    
    {!! Charts::styles() !!}
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
                    <a class="navbar-brand" href="home">
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
                         <img src="{{ asset('dashboard/assets/side_text_admin.png')}}" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="{{ asset('dashboard/assets/side_text_admin.png')}}" class="light-logo" alt="homepage" /></span> </a>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('dashboard/assets/profil.jpg')}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('dashboard/assets/profil.jpg')}}" alt="user"></div>
                                            <div class="u-text">
                                                <h4> {{auth()->user()->NAMA_EMP}} </h4>
                                                <h5>{{auth()->user()->email}}</h5>
                                                <p>ADMIN</p>
                                                <a href="{{url('admin_profil')}}" class="btn btn-rounded btn-success btn-sm">View Profile</a>
                                                </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><!-- <a href="#"><i class="fa fa-power-off"></i> Logout</a> -->
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="margin-left: 10px;">
                                            <i class="fa fa-power-off"></i> Logout
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
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{auth()->user()->NAMA_EMP}} <span class="caret"></span></a>
                        <p>Admin</p>
                        <div class="dropdown-menu animated flipInY">
                           
                             <!-- <a href="login" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> -->
                             <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="padding-left: 10px;">
                               <i class="fa fa-power-off"></i> Logout
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
                            <a  href="{{url('home')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Daftar Pegawai </span></a>
                        </li>
                        <li>
                            <a  href="{{url('input_absen')}}" aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu">Input Data Absensi</span></a>
                        </li> 
<!--                         <li>
                            <a  href="{{url('add_emp')}}" aria-expanded="false"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Tambah Pegawai</span></a>
                        </li>  -->       
                        <li>
                            <a href="{{url('list_absen')}}" aria-expanded="false"><i class="mdi mdi-timetable"></i><span class="hide-menu">Absensi Pegawai</span></a>
                            <!-- <a class="has-arrow "  href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-timetable"></i><span class="hide-menu">Absensi Pegawai</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('list_lembur')}}">Lembur</a></li>
                                <li><a href="{{url('list_telat')}}">Telat</a></li>
                                <li><a href="{{url('list_pul_cpt')}}">Pulang Cepat</a></li>
                                <li><a href="{{url('list_tdk_absen')}}">Tidak Absen</a></li>
                                <li><a href="{{url('list_tdk_senam')}}">Tidak Senam</a></li>
                            </ul> -->
                        </li>

                        <li>
                            <a href="{{url('list_surat')}}" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">list Surat Izin</span></a>
                        </li>

                        
                        <li>
                            <a href="{{url('tunjagan_pegawai')}}" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu">Tunjangan Pegawai</span></a>
                            <!-- <a class="has-arrow "  href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu">List Tunjangan Pegawai</span></a> -->
                            <!-- <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('list_tun_daerah')}}">Daerah</a></li>
                                <li><a href="{{url('list_tun_prestasi')}}">Prestasi</a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="{{url('list_uang_mkn')}}" aria-expanded="false"><i class="mdi mdi-food"></i><span class="hide-menu">List Uang Makan</span></a>
                        </li>

                        <li>
                            <a  href="{{url('list_tunjangan')}}" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu">List Tunjangan</span></a>
                        </li>                        
                        
                        <!-- <li>
                            <a href="{{url('add_event')}}" aria-expanded="false"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu">Tambah Event</span></a>
                        </li> -->

                        

                        <li>
                            <a href="{{url('data_lembur')}}" aria-expanded="false"><i class="mdi mdi-alarm-plus"></i><span class="hide-menu">Lembur</span></a>
                        </li>


                        </li>
                        <li>
                            <a href="{{url('data_potongan')}}" aria-expanded="false"><i class="mdi mdi-cash-usd"></i><span class="hide-menu">Potongan</span></a>
                        </li>
                        <li>
                            <a href="{{url('admin_kinerja')}}" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Kinerja Pegawai</span></a>
                        </li>

                        
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
               
                <!-- item-->
                <!-- <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> -->
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" style="padding-left: 10px;"> 
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
        

        <!-- konten -->
            @yield('content')
        <!-- end konten -->

        
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
    <!-- Footable -->
    <script src="{{ asset('dashboard/plugins/footable/js/footable.all.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript')}}"></script>
    
    <!--FooTable init-->
    <script src="{{ asset('dashboard/js/footable-init.js')}}"></script>
    <script src="{{ asset('js/sweetalert.min.js')}}"></script>

    <!-- drop table -->
    <script src="{{ asset('dashboard/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
    <!-- Include this after the sweet alert js file -->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

    <!-- date and time picker -->
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{ asset('dashboard/plugins/moment/moment.js')}}"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="{{ asset('dashboard/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script>
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done',
        }).find('input').change(function() {
            console.log(this.value);
        });
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
        </script>

        <script src="https:/cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset=utf-8></script>
    <script src="https:/cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset=utf-8></script>
    <script src="https:/cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js" charset=utf-8></script>
    <script src="https:/cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js" charset=utf-8></script>
    @include('sweet::alert')
</body>

</html>
