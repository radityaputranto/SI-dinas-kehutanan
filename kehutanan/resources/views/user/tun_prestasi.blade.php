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
                        <h3 class="text-themecolor m-b-0 m-t-0">Tunjangan Prestasi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Tunjangan Prestasi</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- detail tunjangan -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-block printableArea">
                            @foreach($tun_emp as $data)
                            <h3><b>Detail Tunjangan PRESTASI</b> <span class="pull-right">id : {{$data['ID_TUNJANGAN_EMP']}}</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-success">Dinas Kehutanan Jawa Timur</b></h3>
                                            <p class="text-muted m-l-5">Jalan Raya Juanda No. 5,
                                                <br/> Sedati Agung,
                                                <br/> Kabupaten Sidoarjo,
                                                <br/> Jawa Timur - 61253</p>
                                        </address>
                                        <br><br><br>
                                        <h4>Golongan : {{auth()->user()->GOLONGAN_EMP}}</h4>
                                        <h4>Eselon   : {{auth()->user()->ESELON_EMP}}</h4>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>To,</h3>
                                            <h4 class="font-bold">{{auth()->user()->NAMA_EMP}},</h4>
                                            <p class="text-muted m-l-30">{{auth()->user()->ALAMAT_EMP}}</p>
                                            
                                            <p class="m-t-30"><b>Tanggal Invoice :</b> <i class="fa fa-calendar"></i> {{$data['created_at']}}</p>
                                            
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Deskripsi</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Unit Cost</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Tunjangan Prestasi</td>
                                                    <td class="text-right">1 </td>
                                                    <td class="text-right"> Rp. {{$data['PRESTASI_AWAL']}}</td>
                                                    <td class="text-right"> Rp. {{$data['PRESTASI_AWAL']}} </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Denda Telat</td>
                                                    <td class="text-right"> {{$countTelat}} Menit</td>
                                                    <td class="text-right">-Rp. {{$data['denda_telat']/$countTelat}}</td>
                                                    <td class="text-right">-Rp. {{$data['denda_telat']}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Denda Pulang Cepat</td>
                                                    <td class="text-right"> {{$countPulang}} Menit</td>
                                                    <td class="text-right">-Rp. {{$data['denda_pul_cpt']/$countPulang}} </td>
                                                    <td class="text-right">-Rp. {{$data['denda_pul_cpt']}}</td>
                                                </tr>
                                                @endforeach 
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub Total Tunjangan Prestasi : Rp. {{$data['PRESTASI_AWAL']-$data['denda_telat']-$data['denda_pul_cpt']}}</p>
                                        <p>PPH (5%) : Rp. {{($data['PRESTASI_AWAL']-$data['denda_telat']-$data['denda_pul_cpt'])*$data['PPH']}} </p>
                                        <hr>
                                        <h3><b>Total :</b> Rp. {{$data['TUNJANGAN_PRESTASI']}}</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        
                                        <a href="{{url('pdf_prestasi')}}"><button id="print" class="btn btn-danger" type="button"> <span><i class="fa fa-print"></i>   Print PDF</span> </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end detail tunjangan -->
                
                
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