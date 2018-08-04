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
                        <h3 class="text-themecolor m-b-0 m-t-0">List Tunjangan Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">List Tunjangan Pegawai</li>
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
                                <h4 class="card-title">Daftar Seluruh Tunjangan Pegawai</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Id Tunjangan</th>
                                                <th>NIP</th>
                                                <th>Tunjangan Daerah</th>
                                                <th>Tunjangan Prestasi</th>
                                                <th>PPH</th>
                                                <th>Denda Telat</th>
                                                <th>Denda Pulang Cepat</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            @foreach($tunjangan as $data)
                                            <tr>
                                                <td> {{$data['ID_TUNJANGAN_EMP']}}</td>
                                                <td> {{$data['NIP_EMP']}}</td>
                                                <td> Rp. {{$data['TUNJANGAN_DAERAH']}}</td>
                                                <td> Rp. {{$data['TUNJANGAN_PRESTASI']}}</td>
                                                <td> {{$data['PPH']*100}} %</td>
                                                <td> Rp. {{$data['denda_telat']}}</td>
                                                <td> Rp. {{$data['denda_pul_cpt']}}</td>
                                                
                                            </tr>
                                           
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
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
                        <a href="{{ url('export_tunjangan_pegawai')}}"><button class="btn btn-rounded btn-default btn-excel" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" type="button"><i class="mdi mdi-file-excel"></i> Export Excel</button></a>
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