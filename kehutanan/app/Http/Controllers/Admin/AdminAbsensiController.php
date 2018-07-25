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
        $absensi = Absensi::all()->toArray();
        
         return view('admin.list_absen',compact('absensi'));
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
    public function edit($id_absen)
    {
        $absensi = Absensi::findOrFail($id_absen);
        return view('admin.edit_absensi',compact('absensi','id_absen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_absen)
    {
        alert()->error('Pastikan input terisi ','Gagal Menyimpan Data');
        $absen = Absensi::find($id_absen);
        $this->validate($request, [
            'NIP_EMP' => 'required',
            'TGL_ABSEN' => 'required',
            'SCAN_MASUK' => 'required',
            'SCAN_KELUAR' => 'required',
        ]);
        
          $absen->NIP_EMP = $request->get('NIP_EMP');
          $absen->TGL_ABSEN = $request->get('TGL_ABSEN');
          $absen->SCAN_MASUK = $request->get('SCAN_MASUK');
          $absen->SCAN_KELUAR = $request->get('SCAN_KELUAR');
          $absen->SCAN_TELAT = $request->get('SCAN_TELAT');
          $absen->SCAN_PUL_CPT = $request->get('SCAN_PUL_CPT');
          $absen->SCAN_LEMBUR = $request->get('SCAN_LEMBUR');

        $absen->save();
        alert()->success( 'Data Absensi Berhasil di Update','Absensi telah Terupdate');
        return redirect('list_absen');
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
                }

            }
        }
        alert()->success( 'Data Absensi baru telah tersimapan di database','Data Tersimpan');
                    return redirect('home');
        

    }
}
