@extends('layouts.user')

@section('content')
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Kinerja Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Kinerja Pegawai</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- kinerja user -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-default">
                            <div class="box text-center">
                                <h2 class="font-light text"><i class="mdi mdi-calendar"></i> {{$jum_absensi}} Hari</h2>
                                <h6 class="text">Hari Masuk Kerja</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-default">
                            <div class="box text-center">
                                <h2 class="font-light text"><i class="mdi mdi-cash-multiple"></i> {{$tot_uang}}</h2>
                                <h6 class="text">Total Pendapatan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-default">
                            <div class="box text-center">
                                <h2 class="font-light text"><i class="mdi mdi-clock"></i>{{$jam}} Jam : {{$menit}} Menit </h2>
                                <h6 class="text">Total Jam Kerja</h6>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- chart -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-6 col-xlg-6">
                        <div class="card card-inverse card-default">
                            <div>{!! $chart1->html() !!}</div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xlg-6">
                        <div class="card card-inverse card-default">
                            <div>{!! $chart2->html() !!}</div>
                        </div>

                    </div>
                </div>

                <!-- absensi graph -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-12 col-lg-12 col-xlg-12">
                        <div class="card card-inverse card-default">
                            <div></div>
                        </div>
                    </div>
                </div>



                
                

                 {!! Charts::scripts() !!}
                 {!! $chart1->script() !!}
                 {!! $chart2->script() !!}
                 {!! $chart4->script() !!}
                <!--  -->
                 

                <!-- end profil user -->
               
                
                
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
@endsection