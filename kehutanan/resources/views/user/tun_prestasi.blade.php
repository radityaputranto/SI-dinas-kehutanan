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
                            <h3><b>Detail Tunjangan Prestasi</b> <span class="pull-right">id : 5669626</span></h3>
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
                                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2018</p>
                                            <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2018</p>
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
                                                    <td>Tunjangan Perbulan</td>
                                                    <td class="text-right">1 </td>
                                                    <td class="text-right"> Rp. 1,826,000 </td>
                                                    <td class="text-right"> Rp. 1,826,000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Telat  2/1/2017</td>
                                                    <td class="text-right"> 30 </td>
                                                    <td class="text-right">-Rp. 1,000</td>
                                                    <td class="text-right">-Rp. 30,000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Tidak Ikut senam 7/1/2017</td>
                                                    <td class="text-right"> 1 </td>
                                                    <td class="text-right">-Rp. 100.000 </td>
                                                    <td class="text-right">-Rp. 100.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub Total Tunjangan Prestasi : Rp. 1,696,000</p>
                                        <p>PPH (5%) : Rp. 84,800 </p>
                                        <hr>
                                        <h3><b>Total :</b> Rp. 1,161,200</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        
                                        <button id="print" class="btn btn-danger" type="button"> <span><i class="fa fa-print"></i>   Print PDF</span> </button>
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