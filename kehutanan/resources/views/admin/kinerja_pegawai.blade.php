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
                        <h3 class="text-themecolor m-b-0 m-t-0">Kinerja Pegawai</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan Tunjangan </a></li>
                            <li class="breadcrumb-item active">Kinerja Pegawai</li>
                        </ol>


                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- table data pegawai -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Kinerja Pegawai</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Surat Izin</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Grafik Tunjangan</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-block">
                                        <center><h3 style="color: #747474;">Jumlah Pegawai</h3></center><hr>
                                        <div class="row justify-content-center">
                                            <!-- Column -->
                                            <div class="col-md-2 col-lg-2 col-xlg-2">
                                                <div class="card card-inverse " style="background-color:#FFCC57; ">
                                                    <div class="box  text-center">
                                                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i>{{$jum_pegawai[0]}}</h1>
                                                        <h6 class="text-white">SKR</h6>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="col-md-2 col-lg-2 col-xlg-2">
                                                <div class="card card-inverse " style="background-color: #FF9E42">
                                                    <div class="box text-center">
                                                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i>{{$jum_pegawai[1]}}</h1>
                                                        <h6 class="text-white">PLANO</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="col-md-2 col-lg-2 col-xlg-2">
                                                <div class="card card-inverse " style="background-color: #39A1EA">
                                                    <div class="box text-center">
                                                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i>{{$jum_pegawai[2]}}</h1>
                                                        <h6 class="text-white">PHPL</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="col-md-2 col-lg-2 col-xlg-2">
                                                <div class="card card-inverse " style="background-color: #4CBFBF">
                                                    <div class="box text-center">
                                                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i>{{$jum_pegawai[3]}}</h1>
                                                        <h6 class="text-white">PKHKA</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="col-md-2 col-lg-2 col-xlg-2">
                                                <div class="card card-inverse " style="background-color: #FF6383">
                                                    <div class="box text-center">
                                                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i>{{$jum_pegawai[4]}}</h1>
                                                        <h6 class="text-white">RLPS</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                        {!! $chart1->html() !!}
                                        {!! Charts::scripts() !!}
                                         {!! $chart1->script() !!}
                                    </div>
                                </div>

                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="card-block">
                                                    {!! $chart2->html() !!}
                                                    {!! $chart2->script() !!}            
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-block">
                                                    {!! $chart3->html() !!}
                                                    {!! $chart3->script() !!}
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="card-block">
                                                    {!! $chart2->html() !!}
                                                    {!! $chart2->script() !!}            
                                                </div>
                                        
                                        
                                    
                                </div>

                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-block">
                                        {!! $chart4->html() !!}
                                         {!! $chart4->script() !!}
                                    </div>
                                </div>
                            </div>
                             
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection