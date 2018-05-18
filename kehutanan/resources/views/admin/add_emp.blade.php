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
                                <form class="form-horizontal p-t-20" action="{{ route('emp.store') }}"  method="post">
                                    {{csrf_field()}}

                                    <div class="form-group row {{ $errors->has('NAMA_EMP') ? 'has-error' : '' }}">
                                        <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account"></i></div>
                                                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="NAMA_EMP">
                                            </div>
                                            @if ($errors->has('NAMA_EMP'))
                                                <span class="alert alert-danger">Nama Pegawai telah digunakan / tidak boleh kosong</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('GENDER') ? 'has-error' : '' }}">
                                        <label for="departemen" class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-gender-male-female"></i></div>
                                                <select class="form-control custom-select" id="departemen" name="GENDER">
                                                            <option value="pria">Pria</option>
                                                            <option value="wanita">Wanita</option>
                                                            
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row form-group row {{ $errors->has('NIP_EMP') ? 'has-error' : '' }}">
                                        <label for="nip_peg" class="col-sm-3 control-label">NIP*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account-card-details"></i></div>
                                                <input type="number" class="form-control" id="nip_peg" placeholder="NIP" name="NIP_EMP">
                                            </div>
                                            @if ($errors->has('NIP_EMP'))
                                                <span class="alert alert-danger">NIP Pegawai telah digunakan / tidak boleh kosong</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-email"></i></div>
                                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="alert alert-danger">Email Pegawai telah digunakan / tidak boleh kosong</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="pass" class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-key"></i></div>
                                                <input type="password" class="form-control" id="pass" placeholder="Password" name="password" >
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="help-block">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row form-group row {{ $errors->has('ID_DEPT') ? 'has-error' : '' }}">
                                        <label for="departemen" class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-briefcase"></i></div>
                                                <select class="form-control custom-select" id="departemen" name="ID_DEPT">
                                                            <option value="1">SKR</option>
                                                            <option value="2">Plano</option>
                                                            <option value="3">PHPL</option>
                                                            <option value="4">PKHKA</option>
                                                            <option value="5">RLPS</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('ID_DEPT'))
                                                <span class="help-block">{{ $errors->first('ID_DEPT') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row form-group row {{ $errors->has('GOLONGAN_EMP') ? 'has-error' : '' }}">
                                        <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label"></i></div>
                                                <select class="form-control custom-select" id="golongan"  name="GOLONGAN_EMP">
                                                            <option value="I A">I A</option>
                                                            <option value="II A">II A</option>
                                                            <option value="III A">III A</option>
                                                            <option value="I B">I B</option>
                                                            <option value="II B">II B</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('GOLONGAN_EMP'))
                                                <span class="help-block">{{ $errors->first('GOLONGAN_EMP') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row form-group row {{ $errors->has('ESELON_EMP') ? 'has-error' : '' }}">
                                        <label for="eselon" class="col-sm-3 control-label">Eselon</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label-outline"></i></div>
                                                <select class="form-control custom-select" id="golongan" name="ESELON_EMP">
                                                            <option value="I A">I A</option>
                                                            <option value="II A">II A<</option>
                                                            <option value="III A">III A</option>
                                                            <option value="I B">I B</option>
                                                            <option value="II B">II B</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('ESELON_EMP'))
                                                <span class="help-block">{{ $errors->first('ESELON_EMP') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row form-group row {{ $errors->has('NOTELP_EMP') ? 'has-error' : '' }}">
                                        <label for="noTelp" class="col-sm-3 control-label">No Telp</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-phone"></i></div>
                                                <input type="number" class="form-control" id="noTelp" placeholder="No Telp" name="NOTELP_EMP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row form-group row {{ $errors->has('ALAMAT_EMP') ? 'has-error' : '' }}">
                                        <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-map-marker"></i></div>
                                                <textarea type="text" class="form-control" id="alamat" placeholder="Alamat" name="ALAMAT_EMP"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Daftar</button>
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