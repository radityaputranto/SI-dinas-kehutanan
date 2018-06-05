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
                        <h3 class="text-themecolor m-b-0 m-t-0">Daftar Potongan Absen</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan Tunjangan </a></li>
                            <li class="breadcrumb-item active">Daftar Potongan Absen</li>
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
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Tidak Masuk</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Telat</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Tidak Absen / Senam</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-block">
                                    <div class="table-responsive">

                                    <table id="demo-foo-addrow2" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                

                                                <th>Eselon</th>
                                                <th>Golongan</th>
                                                <th>Tidak Masuk TK</th>
                                                <th>Tidak Masuk DK</th>
                                                
                                                
                                                
                                                <th> </th>
                                            </tr>
                                        </thead>
                                    <div class="m-t-40">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <div class="form-group">
                                                     <h4 class="card-title">Daftar Potongan Absen</h4>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="form-group">
                                                    <!-- <a type="button" class="btn btn-info waves-effect waves-light" href="{{url('add_datajangan')}}">add</a> -->
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <tbody>
                                            TK = Tanpa Keterangan<br>   
                                            DK = Dengan Keterangan
                                             @foreach($potongan as $data)
                                            <tr>
                                               
                                                <td>{{$data['eselon']}}</td>
                                                <td>{{$data['golongan']}}</td>
                                                
                                                <td>Rp. {{$data['tidak_masuk_tk']}}</td>
                                                <td>Rp. {{$data['tidak_masuk_dk']}}</td>
                                                
                                                
                                               
                                                <td>
                                                    <a href="{{action('Admin\PotonganController@edit', $data['id_potongan'])}}"><button class="btn btn-rounded btn-info">Edit</button></a>
                                                
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
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-block">
                                        <div class="table-responsive">

                                    <table id="demo-foo-addrow2" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                

                                                <th>Eselon</th>
                                                <th>Golongan</th>
                                                
                                                <th>Telat psw 1</th>
                                                <th>Telat psw 2</th>
                                                <th>Telat psw 3</th>
                                                <th>Telat psw 4</th>
                                                
                                                
                                                <th> </th>
                                            </tr>
                                        </thead>
                                    <div class="m-t-40">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <div class="form-group">
                                                     <h4 class="card-title">Daftar Potongan Absen</h4>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="form-group">
                                                    <!-- <a type="button" class="btn btn-info waves-effect waves-light" href="{{url('add_datajangan')}}">add</a> -->
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <tbody>
                                                Telat Masuk dan Pulang Sebelum Waktunya<br> 
                                                Telat psw 1 = ( 1 menit s.d 30 menit) | Telat psw 3 = ( 61 menit s.d 90 menit)<br>   
                                                Telat psw 2 = ( 31 menit s.d 60 menit) | Telat psw 4 = ( > 90 menit)<br>   
                                                
                                             @foreach($potongan as $data)
                                            <tr>
                                               
                                                <td>{{$data['eselon']}}</td>
                                                <td>{{$data['golongan']}}</td>
                                                <td>Rp. {{$data['telat_psw_1']}}</td>
                                                <td>Rp. {{$data['telat_psw_2']}}</td>
                                                <td>Rp. {{$data['telat_psw_3']}}</td>
                                                <td>Rp. {{$data['telat_psw_4']}}</td>
                                                
                                                
                                               
                                                <td>
                                                    <a href="{{action('Admin\PotonganController@edit', $data['id_potongan'])}}"><button class="btn btn-rounded btn-info">Edit</button></a>
                                                
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
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-block">
                                        <div class="table-responsive">

                                    <table id="demo-foo-addrow2" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                

                                                <th>Eselon</th>
                                                <th>Golongan</th>
                                                
                                                <th>Tidak Absen</th>
                                                <th>Telat Senam</th>
                                                <th>Tidak Senam</th>
                                                
                                                <th> </th>
                                            </tr>
                                        </thead>
                                    <div class="m-t-40">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <div class="form-group">
                                                     <h4 class="card-title">Daftar Potongan Absen</h4>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="form-group">
                                                    <!-- <a type="button" class="btn btn-info waves-effect waves-light" href="{{url('add_datajangan')}}">add</a> -->
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <tbody>
                                             @foreach($potongan as $data)
                                            <tr>
                                               
                                                <td>{{$data['eselon']}}</td>
                                                <td>{{$data['golongan']}}</td>
                                                <td>Rp. {{$data['tdk_absen']}}</td>
                                                <td>Rp. {{$data['telat_senam']}}</td>
                                                <td>Rp. {{$data['tdk_senam']}}</td>
                                                
                                               
                                                <td>
                                                    <a href="{{action('Admin\PotonganController@edit', $data['id_potongan'])}}"><button class="btn btn-rounded btn-info">Edit</button></a>
                                                
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
                        <a href="{{ url('export_potongan')}}"><button class="btn btn-rounded btn-default btn-excel" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" type="button"><i class="mdi mdi-file-excel"></i> Export Excel</button></a>
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