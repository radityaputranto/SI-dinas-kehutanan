<?php
namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use PDF;
use App\TunjanganEmp;
use App\Absensi;
use App\Tunjangan;
/*use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Charts\SampleChart;*/
use Charts;

class KinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp_id =  (auth()->user()->NIP_EMP);
        $absensi = Absensi::where('NIP_EMP',$emp_id)->get();
        $jum_absensi= $absensi->count();


        $golongan= (auth()->user()->GOLONGAN_EMP);
        $tunjangan_emp= Tunjangan::where('golongan',$golongan)->first();

        $tun_daerah = $tunjangan_emp['tun_daerah'];
        $uang_mkn = $tunjangan_emp['tun_daerah'];
        $tun_prestasi = $tunjangan_emp['tun_prestasi'];
        $tot_uang = $tun_daerah + $uang_mkn + $tun_prestasi;
        
        /*$jam_1 = strtotime("07:00:00");
        $jam_2 = strtotime("14:00:00");
        $jam_3 = $jam_1->diff($jam_2);
        dd($jam_3->format(' %H hours'));*/





        $masuk = $absensi->where('SCAN_MASUK','!=',null);
        $telat = $absensi->where('SCAN_TELAT','!=',null);
        $pulang = $absensi->where('SCAN_KELUAR','!=',null);
        $pulang_cpt = $absensi->where('SCAN_PUL_CPT','!=',null);
        $pulang_lembur = $absensi->where('SCAN_LEMBUR','!=',null);


        $countTelat = 0;
        
        $jum_masuk=$masuk->count();
        $jum_telat=$telat->count();
        $jum_pul_cpt=$pulang_cpt->count();
        $jum_pulang=$pulang->count();
        $jum_lembur=$pulang_lembur->count();
        
        $array_masuk = array();
        foreach ($masuk as $m) {
            
            array_push($array_masuk, $m['SCAN_MASUK']);
            //dd($array_masuk);
        }

        foreach ($pulang as $p) {
            $array_pulang = array();
            array_push($array_pulang, $p['SCAN_KELUAR']);
        }
        foreach ($pulang_cpt as $pc) {
            $array_pulang_cpt = array();
            array_push($array_pulang_cpt, $pc['SCAN_PUL_CPT']);
        }
        foreach ($pulang_lembur as $l) {
            $array_lembur = array();
            array_push($array_lembur, $l['SCAN_LEMBUR']);
        }
        foreach ($telat as $t) {
            
            //echo $t->SCAN_TELAT.'<br>';
            /*$jam_masuk = strtotime("07:00:00");
            $jam_telat = strtotime($t->SCAN_TELAT);

            $telat =  round(abs($jam_masuk - $jam_telat) / 60,2);
            $countTelat += $telat;
            $jum_telat += 1;
*/          
            $array_telat = array();
            array_push($array_telat, $t['SCAN_TELAT']);
            

        }
                    /*$awal  = strtotime(06:00);
                    $akhir = strtotime(18:00);
                    $diff  = $akhir - $awal;
                    dd($diff);*/

        $jam=0;
        $menit=0;
        $jam_kerja=0;
        foreach ($absensi as $data) {
            if ($data['SCAN_MASUK']!=null && $data['SCAN_KELUAR']!=null){
                    $awal  = strtotime($data['SCAN_MASUK']);
                    
                    $akhir = strtotime($data['SCAN_KELUAR']);
                    //$diff = $awal->diff($akhir);
                    $diff  = abs($akhir - $awal);
                    $jam_kerja += $diff;

                    

            }
            elseif ($data['SCAN_MASUK']!=null && $data['SCAN_PUL_CPT']!=null){
                    $awal  = strtotime($data['SCAN_MASUK']);
                    $akhir = strtotime($data['SCAN_PUL_CPT']);
                    $diff  = abs($akhir - $awal);
                    $jam_kerja += $diff;
            }
            elseif ($data['SCAN_MASUK']!=null && $data['SCAN_LEMBUR']!=null){
                    $awal  = strtotime($data['SCAN_MASUK']);
                    $akhir = strtotime($data['SCAN_LEMBUR']);
                    $diff  = abs($akhir - $awal);
                    $jam_kerja += $diff;
            }
            elseif ($data['SCAN_TELAT']!=null && $data['SCAN_KELUAR']!=null){
                    $awal  = strtotime($data['SCAN_MASUK']);
                    $akhir = strtotime($data['SCAN_KELUAR']);
                    $diff  = abs($akhir - $awal);
                    $jam_kerja += $diff;

            }
            elseif ($data['SCAN_TELAT']!=null && $data['SCAN_PUL_CPT']!=null){
                    $awal  = strtotime($data['SCAN_MASUK']);
                    $akhir = strtotime($data['SCAN_PUL_CPT']);
                    $diff  = abs($akhir - $awal);
                    $jam_kerja += $diff;
                
            }
            elseif ($data['SCAN_TELAT']!=null && $data['SCAN_LEMBUR']!=null){
                    $awal  = strtotime($data['SCAN_MASUK']);
                    $akhir = strtotime($data['SCAN_LEMBUR']);
                    $diff  = abs($akhir - $awal);
                    $jam_kerja += $diff;
            }

        }


        //konversi string ke jam
        
        //int($jam_kerja);
        //dd($jam_kerja);
        //dd(date("H:i:s",(int)$jam_kerja));


        //$jam   = date("H",(int)$jam_kerja);//floor($jam_kerja / (60 * 60));
        $jam   = 176;//floor($jam_kerja / (60 * 60));
        $menit = date("i",(int)$jam_kerja);
                    
        //dd($absensi);
        $tot_uang = $this->rupiah($tot_uang);

        $chart1 = Charts::create('pie','chartjs')
                ->title("Persentase Absen Masuk")
                ->labels(["On Time","Telat"])
                ->values([$jum_masuk,$jum_telat])
                ->elementLabel("total uasers")
                ->responsive(false)
                ->width(0)
                ->height(400)
                ->colors(["#4BC0C0","#FF6384"]);

         $chart2 = Charts::create('pie','chartjs')
                ->title("Persentase Absen Pulang")
                ->labels(["Pulang","Pulang Cepat","Lembur"])
                ->values([$jum_pulang,$jum_pul_cpt,$jum_lembur])
                ->elementLabel("total uasers")
                ->responsive(false)
                ->width(0)
                ->height(400)
                ->colors(["#FFCD56","#FF9F40","#36A2EB"]);

//BISA
        /*$chart3 = Charts::multi('line','material')
                ->title("Absensi Pegawai")
                ->dimensions(0,400)
                ->template("material")
                ->dataset('Masuk',$array_masuk)
                ->dataset('Telat',$array_telat)
                ->dataset('Pulang',$array_pulang)
                ->dataset('Pulang Cepat',$array_pulang_cpt)
                ->dataset('Lembur',$array_lembur)
                ->responsive(true)
                ->labels(['one','two','three']);*/


        $chart5 = Charts::multi('line','highcharts')
                ->title("Absensi Pegawai")
                ->dimensions(1000,50000)
                /*->template("material")*/
                ->dataset('Masuk',[22100, 22135, 20047, 20187, 18752])
                ->dataset('Telat',[13478, 15295, 15812, 14904, 14748])
                ->dataset('Pulang',[22212, 22639, 21825, 21034, 20815])
                ->responsive(true)
                ->labels(['27 Nov 2010', '26 Nov 2011', '24 Nov 2012', '30 Nov 2013', '29 Nov 2014']);


        $absensi = Absensi::where('NIP_EMP',$emp_id)->get();
        $chart4 = Charts::create('line','highcharts')
        ->title("Absensi Pegawai")
        ->elementlabel("Waktu")
        //->dimensions(1000,5000)
        ->responsive(false)
        ->labels($absensi->pluck('TGL_ABSEN'))
        ->values([22100, 22135, 20047, 20187, 18752],[13478, 15295, 15812, 14904, 14748]);
            /*$cha2 = Charts::database( Absensi::where('NIP_EMP',$emp_id),'bar','chartjs')
                    ->elementlabel("total")
                    ->dimensions(1000,400)
                    ->responsive(true)
                    ->groupBy('TGL_ABSEN');*/




        //$chart = new SampleChart;
        // Add the dataset (we will go with the chart template approach)
        /*$chart->dataset('Sample', 'pie', [100, 65, 84, 45, 90])
        ->options(['borderColor' => '#ff0000','labels'=> ["Red", "Blue", "Yellow", "Green"]]);*/


        //$chart->dataset('Sample', 'pie', [100, 65, 84, 45, 90]);
        
        //return view('user.kinerja',compact('jum_absensi','tot_uang',['chart' => $chart]));
        //dd($chart);
        return view('user.kinerja',compact('jum_absensi','tot_uang','chart1','chart2','jam','menit','chart4'));
        //return view('user.kinerja',['chart' => $chart]);
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
