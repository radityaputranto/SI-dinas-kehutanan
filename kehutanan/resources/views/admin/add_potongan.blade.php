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
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Potongan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan lembur </a></li>
                            <li class="breadcrumb-item active">Tambah Potongan</li>
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
                                <h4 class="card-title">Form Input Potongan</h4>
                                <h6 class="card-subtitle">Pastikan menginput data dengan sesuai</h6>
                                <form class="form-horizontal p-t-20" action="{{ route('potongan.store') }}"  method="post">
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
                                                            <option value="I">I</option>
                                                            
                                                            <option value="II">II</option>
                                                            
                                                            <option value="III">III</option>
                                                            
                                                            <option value="IV">IV</option>
                                                            
                                                            
                                                            
                                                </select>
                                            </div>
                                            @if ($errors->has('GOLONGAN'))
                                                <span class="help-block">{{ $errors->first('GOLONGAN') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row form-group row {{ $errors->has('Tdk_masuk_tk') ? 'has-error' : 'Tdk_masuk_tk' }}">
                                        <label for="Tdk_masuk_tk" class="col-sm-3 control-label">Tdk_masuk_tk</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_masuk_tk"  name="Tdk_masuk_tk" >
                                            </div>
                                            @if ($errors->has('Tdk_masuk_tk'))
                                                <span class="help-block">{{ $errors->first('Tdk_masuk_tk') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Tdk_masuk_dk') ? 'has-error' : 'Tdk_masuk_dk' }}">
                                        <label for="Tdk_masuk_dk" class="col-sm-3 control-label">Tdk_masuk_dk</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_masuk_dk"  name="Tdk_masuk_dk" >
                                            </div>
                                            @if ($errors->has('Tdk_masuk_dk'))
                                                <span class="help-block">{{ $errors->first('Tdk_masuk_dk') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_1') ? 'has-error' : 'Telat_psw_1' }}">
                                        <label for="" class="col-sm-3 control-label">Telat_psw_1</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_1"  name="Telat_psw_1" >
                                            </div>
                                            @if ($errors->has('Telat_psw_1'))
                                                <span class="help-block">{{ $errors->first('Telat_psw_1') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_2') ? 'has-error' : 'Telat_psw_2' }}">
                                        <label for="Telat_psw_2" class="col-sm-3 control-label">Telat_psw_2</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_2"  name="Telat_psw_2" >
                                            </div>
                                            @if ($errors->has(''))
                                                <span class="help-block">{{ $errors->first('Telat_psw_2') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_3') ? 'has-error' : 'Telat_psw_3' }}">
                                        <label for="Telat_psw_3" class="col-sm-3 control-label">Telat_psw_3</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_3"  name="Telat_psw_3" >
                                            </div>
                                            @if ($errors->has('Telat_psw_3'))
                                                <span class="help-block">{{ $errors->first('Telat_psw_3') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_4') ? 'has-error' : 'Telat_psw_4' }}">
                                        <label for="Telat_psw_4" class="col-sm-3 control-label">Telat_psw_4</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_4"  name="Telat_psw_4" >
                                            </div>
                                            @if ($errors->has('Telat_psw_4'))
                                                <span class="help-block">{{ $errors->first('Telat_psw_4') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Tdk_absen') ? 'has-error' : 'Tdk_absen' }}">
                                        <label for="" class="col-sm-3 control-label">Tdk_absen</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_absen"  name="Tdk_absen" >
                                            </div>
                                            @if ($errors->has('Tdk_absen'))
                                                <span class="help-block">{{ $errors->first('Tdk_absen') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_senam') ? 'has-error' : 'Telat_senam' }}">
                                        <label for="Telat_senam" class="col-sm-3 control-label">Telat_senam</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_senam"  name="Telat_senam" >
                                            </div>
                                            @if ($errors->has('Telat_senam'))
                                                <span class="help-block">{{ $errors->first('Telat_senam') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="form-group row form-group row {{ $errors->has('Tdk_senam') ? 'has-error' : 'Tdk_senam' }}">
                                        <label for="" class="col-sm-3 control-label">Tdk_senam</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_senam"  name="Tdk_senam" >
                                            </div>
                                            @if ($errors->has('Tdk_senam'))
                                                <span class="help-block">{{ $errors->first('Tdk_senam') }}</span>
                                            @endif
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