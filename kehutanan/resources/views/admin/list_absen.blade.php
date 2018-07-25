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
                        <h3 class="text-themecolor m-b-0 m-t-0">List Absensi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">List Absensi</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- table data pegawai -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daftar Absensi Pegawai</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <!-- <th>No</th> -->
                                                <th>NIP</th>
                                                <!-- <th>Nama</th> -->
                                                <th>Tanggal</th>
                                                <th>Scan Masuk</th>
                                                <th>Scan Pulang</th>
                                                <th>Scan Telat</th>
                                                <th>Scan Pul Cpt</th>
                                                <th>Scan Lembur</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($absensi as $data)
                                            <tr>
                                                
                                                <td>{{$data['NIP_EMP']}}</td>
                                                <td>{{$data['TGL_ABSEN']}}</td>
                                                <td>{{$data['SCAN_MASUK']}}</td>
                                                <td>{{$data['SCAN_KELUAR']}}</td>
                                                <td>{{$data['SCAN_TELAT']}}</td>
                                                <td>{{$data['SCAN_PUL_CPT']}}</td>
                                                <td>{{$data['SCAN_LEMBUR']}}</td>
                                                
                                                
                                                <td>
                                                    <a href="{{action('Admin\AdminAbsensiController@edit', $data['ID_ABSEN'])}}"><button class="btn btn-rounded btn-success">Edit</button></a>
                                                
                                            </tr>
                                            @endforeach 
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button class="btn btn-outline-success waves-effect waves-light" type="button"><span class="btn-label"><i class="mdi mdi-file-excel"></i></span>Excell</button>
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