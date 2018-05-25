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
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Tambah Pegawai</li>
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
                                <h4 class="card-title">Form Input Pegawai</h4>
                                <h6 class="card-subtitle">Pastikan menginput data dengan sesuai</h6>
                                <form class="form-horizontal p-t-20" action="{{ route('tunjangan.store') }}"  method="post">
                                    {{csrf_field()}}

                                    
                                    <div class="form-group row form-group row {{ $errors->has('ESELON') ? 'has-error' : '' }}">
                                        <label for="eselon" class="col-sm-3 control-label">Eselon</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label-outline"></i></div>
                                                <select class="form-control custom-select" id="eselon" name="ESELON">
                                                            <option value="Staf">Staf</option>
                                                            <option value="Eselon IV">Eselon IV</option>
                                                            <option value="Eselon III">Eselon III</option>
                                                            <option value="Eselon II">Eselon II</option>
                                                            <option value="Eselon I">Eselon I</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('ESELON'))
                                                <span class="help-block">{{ $errors->first('ESELON') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('GOLONGAN') ? 'has-error' : '' }}">
                                        <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label"></i></div>
                                                <select class="form-control custom-select" id="golongan"  name="GOLONGAN">
                                                            <option value="I A">I A</option>
                                                            <option value="I B">I B</option>
                                                            <option value="I C">I C</option>
                                                            <option value="I D">I D</option>
                                                            <option value="II A">II A</option>
                                                            <option value="II B">II B</option>
                                                            <option value="II C">II C</option>
                                                            <option value="II D">II D</option>
                                                            <option value="III A">III A</option>
                                                            <option value="III B">III B</option>
                                                            <option value="III C">III C</option>
                                                            <option value="III D">III D</option>
                                                            <option value="IV A">IV A</option>
                                                            <option value="IV B">IV B</option>
                                                            <option value="IV C">IV C</option>
                                                            <option value="IV D">IV D</option>
                                                            <option value="IV E">IV E</option>
                                                            
                                                            
                                                </select>
                                            </div>
                                            @if ($errors->has('GOLONGAN'))
                                                <span class="help-block">{{ $errors->first('GOLONGAN') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row form-group row {{ $errors->has('TUN_DAERAH') ? 'has-error' : '' }}">
                                        <label for="TUN_DAERAH" class="col-sm-3 control-label">Tunjangan Daerah</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-phone"></i></div>
                                                <input type="number" class="form-control" id="TUN_DAERAH" placeholder="Rp." name="TUN_DAERAH">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('TUN_PRESTASI') ? 'has-error' : '' }}">
                                        <label for="TUN_PRESTASI" class="col-sm-3 control-label">Tunjangan Prestasi</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-phone"></i></div>
                                                <input type="number" class="form-control" id="TUN_PRESTASI" placeholder="Rp." name="TUN_PRESTASI">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
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