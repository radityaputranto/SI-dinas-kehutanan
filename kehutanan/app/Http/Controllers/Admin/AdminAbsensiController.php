<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Excel;
use App\Absensi;
use Alert;

class AdminAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function import_excel(Request $request){
        

        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path , function($reader){})->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $absen = new Absensi();
                    $absen->NIP_EMP = $value->nip;
                    $absen->SCAN_KELUAR = $value->scan_keluar;
                    $absen->SCAN_LEMBUR = $value->scan_lembur;
                    $absen->SCAN_PUL_CPT = $value->scan_pul_cpt;
                    $absen->SCAN_TELAT = $value->scan_telat;
                    $absen->SCAN_MASUK = $value->scan_masuk;
                    $absen->TGL_ABSEN = $value->tgl_absen;

                    //'NIP_EMP','SCAN_KELUAR','SCAN_LEMBUR','SCAN_PUL_CPT','SCAN_TELAT','SCAN_MASUK','TGL_ABSEN'
                    $absen->save();
                    /*return redirect('home')->with('Berhasil','Data Absensi berhasil di impor');*/
                    alert()->success( 'Data Absensi baru telah tersimapan di database','Data Tersimpan');
                    return redirect('home');
                }
            }
        }
        

    }
}
