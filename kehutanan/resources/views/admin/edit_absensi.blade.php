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
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Absensi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Edit Absensi</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ================a============================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- table data pegawai -->
                <div class="row">
                   <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Form Edit Absensi</h4>
                                <h6 class="card-subtitle">Pastikan menginput data dengan sesuai</h6>
                                <form class="form-horizontal p-t-20" action="{{ route('absen.update',$id_absen) }}"  method="post">
                                    {{csrf_field()}}

                                    <input name="_method" type="hidden" value="PATCH">

                               
                                    <div class="form-group row form-group row {{ $errors->has('NIP_EMP') ? 'has-error' : '' }}">
                                        <label for="NIP_EMP" class="col-sm-3 control-label">NIP EMP</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account-multiple-outline"></i></div>
                                                <select class="form-control custom-select" id="NIP_EMP"  name="NIP_EMP">
                                                            <option value="{{$absensi['NIP_EMP']}}">{{$absensi['NIP_EMP']}}</option>
                                                           
                                                </select>
                                            </div>
                                            @if ($errors->has('NIP_EMP'))
                                                <span class="help-block">{{ $errors->first('NIP_EMP') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('TGL_ABSEN') ? 'has-error' : '' }}">
                                        <label for="TGL_ABSEN" class="col-sm-3 control-label">TGL_ABSEN</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-calendar"></i></div>
                                                <select class="form-control custom-select" id="TGL_ABSEN"  name="TGL_ABSEN">
                                                            <option value="{{$absensi['TGL_ABSEN']}}">{{$absensi['TGL_ABSEN']}}</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('TGL_ABSEN'))
                                                <span class="help-block">{{ $errors->first('TGL_ABSEN') }}</span>
                                            @endif
                                        </div>
                                    </div>
                            
                                    
                                    <div class="form-group row form-group row {{ $errors->has('SCAN_MASUK') ? 'has-error' : '' }}">
                                        <label for="SCAN_MASUK" class="col-sm-3 control-label">Scan Masuk</label>
                                        <div class="col-sm-9">
                                            <div class="input-group clockpicker ">
                                                <div class="input-group-addon"><i class="mdi mdi-clock"></i></div>
                                                <input type="text" name="SCAN_MASUK" class="form-control" value="{{$absensi['SCAN_MASUK']}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('SCAN_KELUAR') ? 'has-error' : '' }}">
                                        <label for="SCAN_KELUAR" class="col-sm-3 control-label">Scan Keluar</label>
                                        <div class="col-sm-9">
                                            <div class="input-group clockpicker ">
                                                <div class="input-group-addon"><i class="mdi mdi-clock"></i></div>
                                                <input type="text" name="SCAN_KELUAR" class="form-control" value="{{$absensi['SCAN_KELUAR']}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('SCAN_TELAT') ? 'has-error' : '' }}">
                                        <label for="SCAN_TELAT" class="col-sm-3 control-label">Scan Telat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group clockpicker ">
                                                <div class="input-group-addon"><i class="mdi mdi-clock-alert"></i></div>
                                                <input type="text" name="SCAN_TELAT" class="form-control" value="{{$absensi['SCAN_TELAT']}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('SCAN_PUL_CPT') ? 'has-error' : '' }}">
                                        <label for="SCAN_PUL_CPT" class="col-sm-3 control-label">Scan Pulang Cepat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group clockpicker ">
                                                <div class="input-group-addon"><i class="mdi mdi-clock-alert"></i></div>
                                                <input type="text" name="SCAN_PUL_CPT" class="form-control" value="{{$absensi['SCAN_PUL_CPT']}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('SCAN_LEMBUR') ? 'has-error' : '' }}">
                                        <label for="SCAN_LEMBUR" class="col-sm-3 control-label">Scan Lembur</label>
                                        <div class="col-sm-9">
                                            <div class="input-group clockpicker ">
                                                <div class="input-group-addon"><i class="mdi mdi-clock"></i></div>
                                                <input type="text" name="SCAN_LEMBUR" class="form-control" value="{{$absensi['SCAN_LEMBUR']}}">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                                        </div>
                                        
                                        
                                    </div>
                                </form>
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