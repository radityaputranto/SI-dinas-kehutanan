<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Absensi;
use App\Tunjangan;
use App\Potongan;
use App\TunjanganEmp;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$absensi = Absensi::all()->toArray();
        $emp_id =  (auth()->user()->NIP_EMP);
        $absensi = Absensi::where('NIP_EMP',$emp_id)->get();
        $jum_absensi= $absensi->count();


        $golongan= (auth()->user()->GOLONGAN_EMP);
        $tunjangan_emp= Tunjangan::where('golongan',$golongan)->first();

        $telat = $absensi->where('SCAN_TELAT','!=',null);
        $pulang = $absensi->where('SCAN_PUL_CPT','!=',null);


        $countTelat = 0;
        $countPulang = 0;

        foreach ($telat as $t) {
            
            //echo $t->SCAN_TELAT.'<br>';
            $jam_masuk = strtotime("07:00:00");
            $jam_telat = strtotime($t->SCAN_TELAT);

            $telat =  round(abs($jam_masuk - $jam_telat) / 60,2);
            $countTelat += $telat;

        }

        foreach ($pulang as $p) {
            

            $jam_pulang = strtotime("15:30:00");
            $jam_pul_cpt = strtotime($p->SCAN_PUL_CPT);

            $pulang =  round(abs($jam_pulang - $jam_pul_cpt) / 60,2);
            //echo $pulang .'<br>';
            $countPulang += $pulang;
        }
        
        return view('user.absensi',compact('absensi'));
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
}
