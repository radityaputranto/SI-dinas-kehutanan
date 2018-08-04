<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\TunjanganEmp;
use Excel;
class ListTunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tunjangan = TunjanganEmp::all()->toArray();
         //dd($tunjangan);
        return view('admin.tunjangan_pegawai',compact('tunjangan'));
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
    public function export_excel(){
        $tunjagan = TunjanganEmp::select('NIP_EMP','TUNJANGAN_DAERAH','TUNJANGAN_PRESTASI','PRESTASI_AWAL','DAERAH_AWAL','UANG_MKN', 'PPH','denda_telat','denda_pul_cpt')->get();
        return Excel::create('Data Tunjagan Pegawai', function($excel) use ($tunjagan){
            $excel->sheet('mysheet', function($sheet) use ($tunjagan){
                $sheet->fromArray($tunjagan);
            });
        })-> download('xls');
    }
}
