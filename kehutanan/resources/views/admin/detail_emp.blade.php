@extends('layouts.admin')
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Detail data Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Detail data Pegawai</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ================a============================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> 
                                    <!-- <img src="assets/profil.jpg" class="img-circle" width="150" /> -->
                                    <h4 class="card-title m-t-10">{{$emp->NAMA_EMP}}</h4>
                                    <h6>Gender : {{$emp->GENDER}}</h6>
                                    <H6>NIP : {{$emp->NIP_EMP}} </H6>
                                    <H6>DEPARTMENT : {{$emp->NAMA_DEPT}} </H6>
                                    
                                    <small class="text-muted p-t-30 db">Tgl Menjabat : {{$emp->CREATED_AT}}</small>
                                    
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link">Golongan : <font class="font-medium">{{$emp->GOLONGAN_EMP}}</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link">Eselon :    <font class="font-medium"><br>{{$emp->ESELON_EMP}}</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-block"> <small class="text-muted">Email address </small>
                                <h6>{{$emp->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{$emp->NOTELP_EMP}}</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>{{$emp->ALAMAT_EMP}}</h6>
                                <br>
                                <small class="text-muted p-t-30 db">Terakhir diperbaruhi : {{$emp->UPDATED_AT}}</small><br>
                                <a href="/home" class="btn btn-rounded  btn-success">Kembali</a>
                                <!-- <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.915395246305!2d112.7740572153329!3d-7.363380374502246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e53d20055241%3A0x1a9a79629be45c8!2sInfinity+Teknik+Solusindo!5e0!3m2!1sen!2sin!4v1517036380046" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            
                                    <div class="card-block">
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
                                            <div class="col-9">
                                                <h4 class="card-title">Detail Tunjangan</h4>
                                                
                                                <div class="table-responsive">
                                                    <table class="table color-table muted-table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Bulan</th>
                                                                <th>Tunjangan Daerah</th>
                                                                <th>Tunjangan Pegawai</th>
                                                                <th>Uang Makan</th>
                                                                <th>Tgl diambil</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Januari</td>
                                                                <td>Rp. 1.350.000</td>
                                                                <td>Rp. 1.350.000</td>
                                                                <td>Rp. 750.000</td>
                                                                <td>20-05-2018</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                               <!--  </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <!-- Column -->
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