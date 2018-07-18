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
                        <h3 class="text-themecolor m-b-0 m-t-0">Profil Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Profil Pegawai</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- detail profil user -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> 
                                    <!-- <img src="assets/profil.jpg" class="img-circle" width="150" /> -->
                                    <h4 class="card-title m-t-10">{{auth()->user()->NAMA_EMP}}</h4>
                                    <H6>NIP : {{auth()->user()->NIP_EMP}} </H6>
                                    
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link">Golongan : <font class="font-medium">{{auth()->user()->GOLONGAN_EMP}}</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link">Eselon :    <font class="font-medium"><br>{{auth()->user()->GOLONGAN_EMP}}</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-block"> <small class="text-muted">Email address </small>
                                <h6>{{auth()->user()->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{auth()->user()->NOTELP_EMP}}</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>{{auth()->user()->ALAMAT_EMP}}</h6>
                                <br>
                                <small class="text-muted p-t-30 db">Terakhir diperbaruhi : {{auth()->user()->UPDATED_AT}}</small>
                                <!-- <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.915395246305!2d112.7740572153329!3d-7.363380374502246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e53d20055241%3A0x1a9a79629be45c8!2sInfinity+Teknik+Solusindo!5e0!3m2!1sen!2sin!4v1517036380046" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                
                                
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#update" role="tab">Update</a> </li>
                                <!-- <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#profile" role="tab">Profile</a> </li> -->
                            </ul>
                            <!-- Tab panes -->
                            <!-- <div class="tab-content"> -->
                                
                                <!--firest tab-->
                              

                               <!--  <div class="tab-pane" id="update" role="tabpanel"> -->
                                    <div class="card-block">
                                        <form class="form-horizontal form-material" action="{{ route('user.update',auth()->user()->NIP_EMP) }}"method="post">
                                        {{csrf_field()}}

                                        <input name="_method" type="hidden" value="PATCH">

                                           <div class="form-group row {{ $errors->has('NAMA_EMP') ? 'has-error' : '' }}">
                                                <label class="col-md-12">Nama Lengkap</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{auth()->user()->NAMA_EMP}}" class="form-control form-control-line" name="NAMA_EMP" id="nama_lengkap">
                                                </div>

                                                @if ($errors->has('NAMA_EMP'))
                                                    <span class="alert alert-danger">Nama tidak boleh kosong</span>
                                                @endif
                                            </div>

                                            <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <label class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="{{auth()->user()->email}}" class="form-control form-control-line" name="email" id="email">
                                                </div>
                                                
                                                @if ($errors->has('email'))
                                                    <span class="alert alert-danger">Email tidak boleh kosong</span>
                                                @endif
                                            </div>

                                            <div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
                                                <label class="col-md-12">password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="{{auth()->user()->password}}" class="form-control form-control-line" name="password" id="password">
                                                </div>
                                                
                                                @if ($errors->has('password'))
                                                    <span class="alert alert-danger">Password tidak boleh kosong</span>
                                                @endif
                                            </div>

                                            <div class="form-group row {{ $errors->has('NOTELP_EMP') ? 'has-error' : '' }}">
                                                <label class="col-md-12">No Telephone</label>
                                                <div class="col-md-12">
                                                    <input type="number" value="{{auth()->user()->NOTELP_EMP}}" class="form-control form-control-line" name="NOTELP_EMP" id="NOTELP_EMP">
                                                </div>
                                                
                                                @if ($errors->has('NOTELP_EMP'))
                                                    <span class="alert alert-danger">No Telephone tidak boleh kosong</span>
                                                @endif
                                            </div>

                                            <div class="form-group row {{ $errors->has('ALAMAT_EMP') ? 'has-error' : '' }}">
                                                <label class="col-md-12">Alamat</label>
                                                <div class="col-md-12">
                                                    
                                                    <textarea rows="5" class="form-control form-control-line" name="ALAMAT_EMP" id="ALAMAT_EMP"> {{auth()->user()->ALAMAT_EMP}}</textarea>
                                                </div>
                                                
                                                @if ($errors->has('ALAMAT_EMP'))
                                                    <span class="alert alert-danger">Alamat tidak boleh kosong</span>
                                                @endif
                                            </div>
                                           




                                            <!-- <div class="form-group">
                                                <label class="col-md-12">Nama Lengkap</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Raditya Putranto" class="form-control form-control-line" name="nama">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="raditya@gmail.com" class="form-control form-control-line" name="email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">No Telephone</label>
                                                <div class="col-md-12">
                                                    <input type="number" placeholder="123 456 7890" class="form-control form-control-line" name="notelp">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Alamat</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line" name="alamat"></textarea>
                                                </div>
                                            </div> -->
                                          
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" type="submit">Update Profil</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                               <!--  </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- end profil user -->
               
                
                
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