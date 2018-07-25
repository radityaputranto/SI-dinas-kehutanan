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
                        <h3 class="text-themecolor m-b-0 m-t-0">List Uang Makan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">List Uang Makan</li>
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
                                <h4 class="card-title">Daftar Uang Makan Pegawai</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>Golongan</th>
                                                <th>Eselon</th>
                                                <th>Departemen</th>
                                                <th>Uang Makan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>196005271986032009</td>
                                                <td>
                                                    <a href="javascript:void(0)">Dra. IRNA ROCHJATI, MM</a>
                                                </td>
                                              
                                                <td>IV/dA</td>
                                                <td>IIa</td>
                                                <td><span class="label label-danger">SKR</span> </td>
                                                <td>Rp. 225,250</td>
                                                <td><button class="btn btn-outline-info waves-effect waves-light" type="button">Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>19601216 198903 1 005</td>
                                                <td>
                                                    <a href="javascript:void(0)">Ir. PUTUT ADJI SURJANTO, MM</a>
                                                </td>
                                              
                                                <td>IV/dA</td>
                                                <td>IIa</td>
                                                <td><span class="label label-danger">SKR</span> </td>
                                                <td>Rp. 300,500</td>
                                                <td><button class="btn btn-outline-info waves-effect waves-light" type="button">Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>19630625 198603 2 005</td>
                                                <td>
                                                    <a href="javascript:void(0)">WIWIK NURHAYATI, SH, MM</a>
                                                </td>
                                              
                                                <td>IV/dA</td>
                                                <td>IIa</td>
                                                <td><span class="label label-danger">SKR</span> </td>
                                                <td>Rp. 100,250</td>
                                                <td><button class="btn btn-outline-info waves-effect waves-light" type="button">Detail</button></td>
                                            </tr>
                                        
                                            
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