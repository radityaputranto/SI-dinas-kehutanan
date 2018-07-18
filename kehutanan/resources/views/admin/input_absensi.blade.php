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
                        <h3 class="text-themecolor m-b-0 m-t-0">Input Absensi Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Input Absensi</li>
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
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Input Absnesi</h4>
                                <label class="text-muted">Upload file excel Export mesin absensi</label>
                                <form class="form-horizontal p-t-20" method="post" enctype="multipart/form-data" action="{{ url('import_absen')}}">

                                {{csrf_field()}}

                                    

                                    <div class="form-group row m-b-0">
                                        <!-- <div class=" col-sm-12">
                                            <input type="file" name="file" id="file">
                                        </div> -->
                                        
                                        <div class="card-block" style="margin-top: -20px;">
                                            <input type="file" name="file" id="input-file-now file" class="dropify" />
                                        </div>
                                                                                    
                                        <div class=" col-sm-12" style="margin-top: 7px;">
                                            <button type="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-file-excel"></i> Submit Data</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-primary">Acara</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>Senam 12/1/2017</li>
                                    <li>Apel 15/1/2017</li>
                                    
                                </ul>
                            </p>
                        </div>
                    </div> -->
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