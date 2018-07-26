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
                        <h3 class="text-themecolor m-b-0 m-t-0">Detail Absensi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Detail Absensi</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="container">
                    <div class="col-12 card">
                        <marquee>  !! Mengingatkan untuk senam bulan januari akan di laksanakan pada tanggal 21 jnauari jam 6 pagi di lapangan belakang Terima Kasih.</marquee>
                    </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <!-- ribbon lembur-->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-success">Lembur</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>60 menit 12/1/2017</li>
                                    <li>120 menit 15/1/2017</li>
                                    
                                </ul>
                            </p>
                        </div>

                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-danger">Telat</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>30 menit 2/1/2017</li>
                                    <li>10 menit 5/1/2017</li>
                                    <li>5 menit 13/1/2017</li>
                                </ul>
                            </p>
                        </div>

                        <!-- ribbon pulang Cepat -->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-warning">Pulang Cepat</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>10 menit 2/1/2017</li>
                                    <li>5 menit 5/1/2017</li>
                                    <li>10 menit 13/1/2017</li>
                                </ul>
                            </p>
                        </div>

                        <!-- ribbon pulang Cepat -->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-info">Telat Senam</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>5 menit 21/1/2017</li>
                                   
                                </ul>
                            </p>
                        </div>

                         <!-- Tidak Absen -->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-primary">Tidak Ikut Senam</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>10/1/2017</li>
                                    
                                </ul>
                            </p>
                        </div>
                        <!-- Tidak Absen -->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-default">Tidak Absen</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>20/1/2017</li>
                                    
                                </ul>
                            </p>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-block">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
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