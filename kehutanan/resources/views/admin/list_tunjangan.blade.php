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
                        <h3 class="text-themecolor m-b-0 m-t-0">Daftar Tunjagnan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Daftar Tunjagnan</li>
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
                            <div class="card-block">
                               
                                <h6 class="card-subtitle"></h6>



                                <div class="table-responsive">

                                    <table id="demo-foo-addrow2" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                
                                                <th>Eselon</th>
                                                <th>Golongan</th>
                                                <th>Tunjangan Prsetasi</th>
                                                <th>Tunjangan Daerah</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                    <div class="m-t-40">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <div class="form-group">
                                                     <h4 class="card-title">Daftar Tunjagan Pegawai</h4>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="form-group">
                                                    <!-- <a type="button" class="btn btn-info waves-effect waves-light" href="{{url('add_tunjangan')}}">add</a> -->
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <tbody>
                                             @foreach($tunjangan as $tun)
                                            <tr>
                                               
                                                <td>{{$tun['eselon']}}</td>
                                                <td>{{$tun['golongan']}}</td>
                                                <td>Rp. {{$tun['tun_daerah']}}</td>
                                                <td>Rp. {{$tun['tun_prestasi']}}</td>
                                                <td>
                                                    <a href="{{action('Admin\TunjanganController@edit', $tun['id_tunjangan'])}}"><button class="btn btn-rounded btn-success">Edit</button></a>
                                                
                                            </tr>
                                            @endforeach 
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                </td>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
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