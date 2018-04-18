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
                        <h3 class="text-themecolor m-b-0 m-t-0">Daftar Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Daftar Pegawai</li>
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
                                <h4 class="card-title">tambah Acara Rutin</h4>
                                
                                <form class="form-horizontal p-t-20">

                                    <div class="form-group">
                                        <label class="m-t-20">Acara</label>
                                        <div class="input-group ">
                                            <select class="form-control custom-select" id="acara">
                                                                <option value="senam">Senam</option>
                                                                <option value="apel">Apel</option>
                                                                
                                            </select> 
                                            <span class="input-group-addon"> <span class="mdi mdi-human-handsup"></span> </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="box-title m-t-30">Tanggal</h5>
                                        <div class="input-group">
                                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                            <span class="input-group-addon"><i class="icon-calender"></i></span> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="m-t-20">Waktu</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30"> <span class="input-group-addon"> <span class="fa fa-clock-o"></span> </span>
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-0">
                                        <div class=" col-sm-9">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">tambah Event</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- ribbon lembur-->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-primary">Acara</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>Senam 12/1/2017</li>
                                    <li>Apel 15/1/2017</li>
                                    
                                </ul>
                            </p>
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