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
                        <h3 class="text-themecolor m-b-0 m-t-0">Detail Surat Ijin Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Detail Surat Ijin Pegawai</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ================a============================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                
                                    <!-- <img src="assets/profil.jpg" class="img-circle" width="150" /> -->
                                    
                                    <div class="card-block"> 

                                        <small class="text-muted">Id Surat </small>
                                        <h6>{{$mail->id_surat}}</h6> 

                                        <small class="text-muted  db">NIP Pegawai</small>
                                        <h6>{{$mail->nip}}</h6>

                                        <small class="text-muted p-t-5 db">Nama Pegawai</small>
                                        <h6></h6>

                                        <small class="text-muted p-t-5 db">Jenis Surat</small>
                                        <h6>{{$mail->jenis}}</h6>

                                        <small class="text-muted p-t-5 db">Tgl Ijin</small>
                                        <h6>{{$mail->tgl_ijin}}</h6>

                                        <small class="text-muted p-t-5 db">Tgl Submit Surat</small>
                                        <h6>{{$mail->created_at}}</h6>

                                        <small class="text-muted p-t-5 db">Keterangan</small>
                                        <h6>{{$mail->keterangan}}</h6>

                                    </div>

                                    
                                    
                                 
                                    
                                    
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block"> 
                                <div class="card-block"> 
                                <h4 class="text-muted p-t-15 db">Foto Surat Ijin</h4>
                                <img src="{{ Storage::url($mail->file_surat) }}" >
                                </div>
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