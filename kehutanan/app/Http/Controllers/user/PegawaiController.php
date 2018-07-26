<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Absensi;
use App\Tunjangan;
use App\Potongan;
use App\TunjanganEmp;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $rp_daerah;
    public $rp_prestasi;
    public function index()
    {
        //$absensi = Absensi::all()->toArray();
        $emp_id =  (auth()->user()->NIP_EMP);
        $absensi = Absensi::where('NIP_EMP',$emp_id)->get();
        $jum_absensi= $absensi->count();


        $golongan= (auth()->user()->GOLONGAN_EMP);
        $tunjangan_emp= Tunjangan::where('golongan',$golongan)->first();

        $tun_daerah = $tunjangan_emp['tun_daerah'];
        $daerah_awal= $tunjangan_emp['tun_daerah'];

        $tun_prestasi = $tunjangan_emp['tun_prestasi'];
        $prestasi_awal =$tunjangan_emp['tun_prestasi'];



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
            
            $gol =  explode(' ', $golongan) ;
            $potongan_emp= Potongan::where('golongan',$gol[0])->first();
            

            $denda_telat= $countTelat*$potongan_emp['telat_psw_1'];
            $denda_pul_cpt= $countPulang*$potongan_emp['telat_psw_1'];

            $denda_total= $denda_telat+$denda_pul_cpt;

            

            $uang_mkn=0;
            $pph=0;
            //uang makan
            
            switch ($gol[0]) {
                case 'I':
                    $uang_mkn=30000;
                    $pph=1;
                    break;
                case 'II':
                    $uang_mkn=30000;
                    $pph=1;
                    break;
                case 'III':
                    $uang_mkn=35000;
                    $pph=0.05;
                    break;
                case 'IV':
                    $uang_mkn=41000;
                    $pph=0.15;
                    break;    
            }
            /*dd($uang_mkn);*/
            if ($jum_absensi <= 22) {
                $tot_uang_mkn = $jum_absensi*$uang_mkn;
            }
            else{
                $tot_uang_mkn = 22*$uang_mkn;
            }
            
            $rp_uang_mkn = $this->rupiah($tot_uang_mkn);


            //final tunjangan
            $tun_prestasi = $tun_prestasi - $denda_total;
            $tun_daerah = $tun_daerah - $denda_total;

            //kali pph
            $pph_prestasi = $tun_prestasi*$pph;
            $pph_daerah = $tun_daerah*$pph;

            $tun_prestasi = $tun_prestasi - $pph_prestasi;
            $tun_daerah = $tun_daerah - $pph_daerah;

            $this->rp_daerah = $this->rupiah($tun_daerah);
            $this->rp_prestasi = $this->rupiah($tun_prestasi);
            //die();
            $rp_daerah = $this->rp_daerah;
            $rp_prestasi = $this->rp_prestasi;

            /*store databse*/
            //$tun_emp = TunjanganEmp::find($);
            $TunEmp =  TunjanganEmp::updateOrCreate([
            'NIP_EMP' => auth()->user()->NIP_EMP,
            'TUNJANGAN_PRESTASI' => $tun_prestasi,
            'TUNJANGAN_DAERAH' => $tun_daerah,
            'PRESTASI_AWAL' => $prestasi_awal,
            'DAERAH_AWAL' => $daerah_awal,                        
            'UANG_MKN' => $tot_uang_mkn,
            'PPH' => $pph,
            'denda_telat' => $denda_telat,
            'denda_pul_cpt' => $denda_pul_cpt,
            ]);
     
            //$TunEmp->save();

        // if (!empty($absensi['SCAN_TELAT']) || !empty($absensi['SCAN_PUL_CPT']))) {
        //     $telat+=$absensi['SCAN_TELAT'];
        //     $telat+=$absensi['SCAN_TELAT'];
        // }
        //return $tun_pres;

        // $absensi = Absensi::findOrFail(auth()->user()->NIP_EMP);
        //dd($absensi);
        return view('user/home',compact('absensi','rp_prestasi','rp_daerah','countPulang','countTelat','rp_uang_mkn'));
    }
     //Tunjangan
    public function tun_prestasi(){
        $emp_id =  (auth()->user()->NIP_EMP);
        $tun_emp = TunjanganEmp::where('NIP_EMP',$emp_id)->get();

        $absensi = Absensi::where('NIP_EMP',$emp_id)->get();
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

        return view('user.tun_prestasi',compact('tun_emp','countTelat','countPulang'));
    }

    public function tun_daerah(){
        $emp_id =  (auth()->user()->NIP_EMP);
        $tun_emp = TunjanganEmp::where('NIP_EMP',$emp_id)->get();

        $absensi = Absensi::where('NIP_EMP',$emp_id)->get();
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
        //dd($tun_emp);
        return view('user.tun_daerah',compact('tun_emp','countPulang','countTelat'));
    }
    public function uang_mkn(){
        $emp_id =  (auth()->user()->NIP_EMP);
        $tun_emp = TunjanganEmp::where('NIP_EMP',$emp_id)->get();
        $golongan= (auth()->user()->GOLONGAN_EMP);
        $gol =  explode(' ', $golongan) ;
        $uang_mkn=0;
        switch ($gol[0]) {
                case 'I':
                    $uang_mkn=30000;
                    break;
                case 'II':
                    $uang_mkn=30000;
                    break;
                case 'III':
                    $uang_mkn=35000;
                    break;
                case 'IV':
                    $uang_mkn=41000;
                    break;    
            }
        //dd($uang_mkn);
        return view('user.uang_mkn',compact('tun_emp','uang_mkn'));
    }
    public function rupiah($angka){
    
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
 
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
