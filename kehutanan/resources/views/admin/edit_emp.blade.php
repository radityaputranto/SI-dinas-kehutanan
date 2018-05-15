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
                                <h4 class="card-title">Data Pegawai sebelumnya</h4>
                                

                               

                                <form class="form-horizontal p-t-20"  method="POST">
                                    <fieldset disabled>
                                    <div class="form-group row">
                                        <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account"></i></div>
                                                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip_peg" class="col-sm-3 control-label">NIP*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account-card-details"></i></div>
                                                <input type="number" class="form-control" id="nip_peg" placeholder="NIP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-email"></i></div>
                                                <input type="email" class="form-control" id="email" placeholder="Email" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass" class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-key"></i></div>
                                                <input type="password" class="form-control" id="pass" placeholder="Password" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="departemen" class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-briefcase"></i></div>
                                                <select class="form-control custom-select" id="departemen">
                                                            <option value="SKR">SKR</option>
                                                            <option value="Plano">Plano</option>
                                                            <option value="PHPL">PHPL</option>
                                                            <option value="PKHKA">PKHKA</option>
                                                            <option value="RLPS">RLPS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label"></i></div>
                                                <select class="form-control custom-select" id="golongan" name="golongan">
                                                            <option value="I A">I A</option>
                                                            <option value="II A">II A<</option>
                                                            <option value="III A">III A</option>
                                                            <option value="I B">I B</option>
                                                            <option value="II B">II B</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="eselon" class="col-sm-3 control-label">Eselon</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label-outline"></i></div>
                                                <select class="form-control custom-select" id="golongan" name="eselon">
                                                            <option value="I A">I A</option>
                                                            <option value="II A">II A<</option>
                                                            <option value="III A">III A</option>
                                                            <option value="I B">I B</option>
                                                            <option value="II B">II B</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noTelp" class="col-sm-3 control-label">No Telp</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-phone"></i></div>
                                                <input type="number" class="form-control" id="noTelp" placeholder="No Telp" name="notelp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-map-marker"></i></div>
                                                <textarea type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- form Edit -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Form Edit Data Pegawai</h4>
                                

                               

                                <form class="form-horizontal p-t-20"  method="POST">
                                    
                                    <div class="form-group row">
                                        <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account"></i></div>
                                                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip_peg" class="col-sm-3 control-label">NIP*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account-card-details"></i></div>
                                                <input type="number" class="form-control" id="nip_peg" placeholder="NIP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-email"></i></div>
                                                <input type="email" class="form-control" id="email" placeholder="Email" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass" class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-key"></i></div>
                                                <input type="password" class="form-control" id="pass" placeholder="Password" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="departemen" class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-briefcase"></i></div>
                                                <select class="form-control custom-select" id="departemen">
                                                            <option value="SKR">SKR</option>
                                                            <option value="Plano">Plano</option>
                                                            <option value="PHPL">PHPL</option>
                                                            <option value="PKHKA">PKHKA</option>
                                                            <option value="RLPS">RLPS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label"></i></div>
                                                <select class="form-control custom-select" id="golongan" name="golongan">
                                                            <option value="I A">I A</option>
                                                            <option value="II A">II A<</option>
                                                            <option value="III A">III A</option>
                                                            <option value="I B">I B</option>
                                                            <option value="II B">II B</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="eselon" class="col-sm-3 control-label">Eselon</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-label-outline"></i></div>
                                                <select class="form-control custom-select" id="golongan" name="eselon">
                                                            <option value="I A">I A</option>
                                                            <option value="II A">II A<</option>
                                                            <option value="III A">III A</option>
                                                            <option value="I B">I B</option>
                                                            <option value="II B">II B</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noTelp" class="col-sm-3 control-label">No Telp</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-phone"></i></div>
                                                <input type="number" class="form-control" id="noTelp" placeholder="No Telp" name="notelp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-map-marker"></i></div>
                                                <textarea type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">EDIT</button>
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