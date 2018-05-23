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
                        <h3 class="text-themecolor m-b-0 m-t-0">Daftar Pegawai new</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Daftar Pegawai</li>
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
                                                
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>Golongan</th>
                                                <th>Eselon</th>
                                                <th>Departemen</th>
                                                <th>No Telp</th>
                                                <th>Detail</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                                                            <div class="m-t-40">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <div class="form-group">
                                                     <h4 class="card-title">Daftar Seluruh Pegawai</h4>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <tbody>
                                             @foreach($users as $emp)
                                            <tr>
                                                {{$emp['']}}
                                                <td>{{$emp['NIP_EMP']}}</td>
                                                <td>
                                                     {{$emp['NAMA_EMP']}}
                                                </td>   
                                                <td>{{$emp['GENDER']}}</td>
                                                <td>{{$emp['GOLONGAN_EMP']}}</td>
                                                <td>{{$emp['ESELON_EMP']}}</td>
                                                <td>
                                                    @switch($emp['dept']['NAMA_DEPT'])
                                                        @case('SKR')
                                                            <span class="label label-danger"> {{$emp['dept']['NAMA_DEPT']}}</span>
                                                            @break

                                                        @case('Plano')
                                                            <span class="label label-info">{{$emp['dept']['NAMA_DEPT']}}</span>
                                                            @break
                                                        @case('PHPL')
                                                            <span class="label label-success">{{$emp['dept']['NAMA_DEPT']}}</span>
                                                            @break
                                                        @case('PKHKA')
                                                            <span class="label label-info">{{$emp['dept']['NAMA_DEPT']}}</span>
                                                            @break
                                                        @case('RLPS')
                                                            <span class="label label-primary">{{$emp['dept']['NAMA_DEPT']}}</span>
                                                            @break
                                                        

                                                        @default
                                                            <span> {{$emp['dept']['NAMA_DEPT']}}</span>
                                                    @endswitch                                                
                                                    <!-- {{$emp['dept']['NAMA_DEPT']}} -->
                                                    <!-- {{$emp['ID_DEPT']}} -->
                                                    <!-- <span class="label label-danger">Designer</span> --> </td>
                                                <td>{{$emp['NOTELP_EMP']}}</td>
                                                <td>
                                                    <!-- <button class="btn btn-rounded btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" type="button">Detail</button> -->
                                                     <a href="{{action('Admin\AdminEmpController@show', $emp['NIP_EMP'])}}"><button class="btn btn-rounded btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" type="button">Detail</button></a>
                                                </td>

                                                <td>
                                                    <a href="{{action('Admin\AdminEmpController@edit', $emp['NIP_EMP'])}}"><button class="btn btn-rounded btn-success">Edit</button></a>

                                                    
                                                <td>
                                                    <form action="{{action('Admin\AdminEmpController@destroy', $emp['NIP_EMP'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        
                                                    </form>

                                                    
                                                </td>
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

                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

                <!-- modal detail -->
               <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name1">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Message:</label>
                                        <textarea class="form-control" id="message-text1"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- end  modal detail -->
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