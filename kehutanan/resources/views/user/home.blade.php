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
                                <h1 class="font-light text-white">{{$rp_uang_mkn}}</h1>
                                <h6 class="text-white">Uang  Makan</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h1 class="font-light text-white">{{$rp_prestasi}}</h1>
                                <h6 class="text-white">Tunjangan Prestasi</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h1 class="font-light text-white">{{$rp_daerah}}</h1>
                                <h6 class="text-white">tunjangan Daerah</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END baris jumlah tunjangan dan uang makan yang diterima -->

                


                <!-- calender absensi -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daftar Absensi Pribadi</h4>
                                <h6 class="card-subtitle"></h6>
                               

                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <!-- <th>No</th> -->
                                                
                                                <!-- <th>Nama</th> -->
                                                <th>Tanggal</th>
                                                <th>Scan Masuk</th>
                                                <th>Scan Pulang</th>
                                                <th>Scan Telat</th>
                                                <th>Scan Pul Cpt</th>
                                                <!-- <th>Scan Lembur</th> -->
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($absensi as $data)
                                            <tr>
                                                <td>{{$data['TGL_ABSEN']}}</td>
                                                <td>{{$data['SCAN_MASUK']}}</td>
                                                <td>{{$data['SCAN_KELUAR']}}</td>
                                                <td><span style="background-color: #F2DEDE">{{$data['SCAN_TELAT']}}</span></td>
                                                <td><span style="background-color: #F2DEDE">{{$data['SCAN_PUL_CPT']}}</span></td>
                                                <!-- <td>{{$data['SCAN_LEMBUR']}}</td> -->
                                                
                                            </tr>
                                            @endforeach 
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <!-- <button class="btn btn-outline-success waves-effect waves-light" type="button"><span class="btn-label"><i class="mdi mdi-file-excel"></i></span>Excell</button> -->
                                                </td>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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
@endsection