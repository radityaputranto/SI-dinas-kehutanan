@extends('layouts.user')
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Surat Izin</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan lembur </a></li>
                            <li class="breadcrumb-item active">Surat Izin</li>
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
                                <h4 class="card-title">Surat Izin Absensi</h4>
                                <h6 class="card-subtitle">Pastikan menginput data dengan sesuai</h6>
                                <form class="form-horizontal p-t-20" method="post" enctype="multipart/form-data" action="{{ url('import_surat')}}">
                                    {{csrf_field()}}
                                    {{ method_field('post') }}

                                    
                                    <div class="form-group row form-group row {{ $errors->has('jenis') ? 'has-error' : '' }}">
                                        <label for="jenis" class="col-sm-3 control-label">Jenis Ijin</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <select class="form-control custom-select" id="jenis" name="jenis">
                                                            <option value="Ijin Sakit">Ijin Sakit</option>
                                                            <option value="Dinas Luar">Dinas Luar</option>
                                                            <option value="Cuti">Cuti</option>
                                                            <option value="Cuti Hamil">Cuti Hamil</option>
                                                            
                                                </select>
                                            </div>
                                            @if ($errors->has('jenis'))
                                                <span class="help-block">{{ $errors->first('jenis') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('tgl_ijin') ? 'has-error' : '' }}">
                                        <label for="tgl_ijin" class="col-sm-3 control-label">Tanggal Ijin</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="tgl_ijin" name="tgl_ijin">
                                            
                                            @if ($errors->has('jenis'))
                                                <span class="help-block">{{ $errors->first('tgl_ijin') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    

                                    <div class="form-group row form-group row {{ $errors->has('file_surat') ? 'has-error' : '' }}">
                                        <label for="file_surat" class="col-sm-3 control-label">Bukti Surat (foto)</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                            
                                                <input type="file" name="file_surat" id="file_surat"/>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group row {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                                        <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <textarea rows="5" class="form-control" id="keterangan"  name="keterangan" ></textarea> 
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-file-excel"></i> Submit Surat</button>
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