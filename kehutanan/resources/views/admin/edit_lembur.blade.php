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
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Lembur</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan lembur </a></li>
                            <li class="breadcrumb-item active">Edit Lembur</li>
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
                                <h4 class="card-title">Form Input Lembur</h4>
                                <h6 class="card-subtitle">Pastikan menginput data dengan sesuai</h6>
                                <form class="form-horizontal p-t-20" action="{{ route('lembur.update',$id_lembur) }}"  method="post">
                                    {{csrf_field()}}

                                    <input name="_method" type="hidden" value="PATCH">

                               
                                    <div class="form-group row form-group row {{ $errors->has('eselon') ? 'has-error' : '' }}">
                                        <label for="eselon" class="col-sm-3 control-label">eselon</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-account-multiple-outline"></i></div>
                                                <select class="form-control custom-select" id="eselon"  name="ESELON">
                                                            <option value="{{$lembur->eselon}}">{{$lembur->eselon}}</option>
                                                           
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
                                                            <option value="{{$lembur->golongan}}">{{$lembur->golongan}}</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('GOLONGAN'))
                                                <span class="help-block">{{ $errors->first('GOLONGAN') }}</span>
                                            @endif
                                        </div>
                                    </div>
                            
                                    
                                    <div class="form-group row form-group row {{ $errors->has('NOMINAL') ? 'has-error' : '' }}">
                                        <label for="NOMINAL" class="col-sm-3 control-label">Nominal</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="mdi mdi-cash"></i></div>
                                                <input type="number" class="form-control" id="NOMINAL"  name="NOMINAL" value="{{$lembur->nominal}}">
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