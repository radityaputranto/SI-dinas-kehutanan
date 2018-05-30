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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan lembur </a></li>
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
                                <h4 class="card-title">Form Edit Potongan</h4>
                                <h6 class="card-subtitle">Pastikan menginput data dengan sesuai</h6>
                                <form class="form-horizontal p-t-20" action="{{ route('potongan.update',$id_potongan) }}"  method="post">
                                    {{csrf_field()}}

                                    <input name="_method" type="hidden" value="PATCH">                                    
                                   <div class="form-group row form-group row {{ $errors->has('eselon') ? 'has-error' : '' }}">
                                        <label for="eselon" class="col-sm-3 control-label">eselon</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account-multiple-outline"></i></div>
                                                <select class="form-control custom-select" id="eselon"  name="ESELON">
                                                            <option value="{{$potongan->eselon}}">{{$potongan->eselon}}</option>
                                                           
                                                </select>
                                            </div>
                                            @if ($errors->has('eselon'))
                                                <span class="help-block">{{ $errors->first('eselon') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('GOLONGAN') ? 'has-error' : '' }}">
                                        <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account-multiple"></i></div>
                                                <select class="form-control custom-select" id="golongan"  name="GOLONGAN">
                                                            <option value="{{$potongan->golongan}}">{{$potongan->golongan}}</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('GOLONGAN'))
                                                <span class="help-block">{{ $errors->first('GOLONGAN') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row form-group row {{ $errors->has('Tdk_masuk_tk') ? 'has-error' : 'Tdk_masuk_tk' }}">
                                        <label for="Tdk_masuk_tk" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_masuk_tk"  name="Tdk_masuk_tk" value="{{$potongan->tidak_masuk_tk}}">
                                            </div>
                                            @if ($errors->has('Tdk_masuk_tk'))
                                                <span class="help-block">{{ $errors->first('Tdk_masuk_tk') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Tdk_masuk_dk') ? 'has-error' : 'Tdk_masuk_dk' }}">
                                        <label for="Tdk_masuk_dk" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_masuk_dk"  name="Tdk_masuk_dk" value="{{$potongan->tidak_masuk_dk}}" >
                                            </div>
                                            @if ($errors->has('Tdk_masuk_dk'))
                                                <span class="help-block">{{ $errors->first('Tdk_masuk_dk') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_1') ? 'has-error' : 'Telat_psw_1' }}">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_1"  name="Telat_psw_1" value="{{$potongan->telat_psw_1}}">
                                            </div>
                                            @if ($errors->has('Telat_psw_1'))
                                                <span class="help-block">{{ $errors->first('Telat_psw_1') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_2') ? 'has-error' : 'Telat_psw_2' }}">
                                        <label for="Telat_psw_2" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_2"  name="Telat_psw_2" value="{{$potongan->telat_psw_2}}">
                                            </div>
                                            @if ($errors->has(''))
                                                <span class="help-block">{{ $errors->first('Telat_psw_2') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_3') ? 'has-error' : 'Telat_psw_3' }}">
                                        <label for="Telat_psw_3" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_3"  name="Telat_psw_3" value="{{$potongan->telat_psw_3}}" >
                                            </div>
                                            @if ($errors->has('Telat_psw_3'))
                                                <span class="help-block">{{ $errors->first('Telat_psw_3') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_psw_4') ? 'has-error' : 'Telat_psw_4' }}">
                                        <label for="Telat_psw_4" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_psw_4"  name="Telat_psw_4" value="{{$potongan->telat_psw_4}}">
                                            </div>
                                            @if ($errors->has('Telat_psw_4'))
                                                <span class="help-block">{{ $errors->first('Telat_psw_4') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Tdk_absen') ? 'has-error' : 'Tdk_absen' }}">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_absen"  name="Tdk_absen" value="{{$potongan->tdk_absen}}">
                                            </div>
                                            @if ($errors->has('Tdk_absen'))
                                                <span class="help-block">{{ $errors->first('Tdk_absen') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('Telat_senam') ? 'has-error' : 'Telat_senam' }}">
                                        <label for="Telat_senam" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Telat_senam"  name="Telat_senam" value="{{$potongan->telat_senam}}">
                                            </div>
                                            @if ($errors->has('Telat_senam'))
                                                <span class="help-block">{{ $errors->first('Telat_senam') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="form-group row form-group row {{ $errors->has('Tdk_senam') ? 'has-error' : 'Tdk_senam' }}">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="Tdk_senam"  name="Tdk_senam" value="{{$potongan->tdk_senam}}">
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