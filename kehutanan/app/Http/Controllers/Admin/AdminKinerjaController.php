<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\TunjanganEmp;
use App\Department;
use App\Surat;


use Charts;

class AdminKinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //untuk cek jumlah department
        $department = Department::all()->toArray();

        $jum_pegawai = array();
        foreach ($department as $dpt) {
            //dd($dpt['JUM_EMP']);
            array_push($jum_pegawai, $dpt['JUM_EMP']);
        }
        //dd($jum_pegawai);


        //untuk cek jumlah surat izin
        $surat = Surat::all()->toArray();
        $izin_sakit=0;
        $dinas_luar=0;
        $cuti=0;
        $cuti_hamil=0;
        foreach ($surat as $data) {
            
            switch ($data['jenis']) {
                case 'Ijin Sakit':
                    $izin_sakit=$izin_sakit+1;
                    break;
                case 'Dinas Luar':
                    $dinas_luar=$dinas_luar+1;
                    break;
                case 'Cuti':
                    $cuti=$cuti+1;
                    break;
                case 'Cuti Hamil':
                    $cuti_hamil=$cuti_hamil+1;
                    break;
                
            }
        }


        //untuk cek nilai tunjangan
        $tunjangan = TunjanganEmp::all()->toArray();
        $tun_prestasi=0;
        $tun_daerah=0;
        $uang_mkn=0;
        $jum_tunjangan = 0;

        foreach ($tunjangan as $tun) {
            $tun_prestasi = $tun_prestasi + $tun['TUNJANGAN_PRESTASI'];
            $tun_daerah = $tun_daerah + $tun['TUNJANGAN_DAERAH'];
            $uang_mkn = $uang_mkn + $tun['UANG_MKN'];
            $jum_tunjangan = $jum_tunjangan +1;
        }
        //rat rata tunjangan pegawai
        $tun_prestasi = $tun_prestasi / $jum_tunjangan;
        $tun_daerah = $tun_daerah / $jum_tunjangan;
        $uang_mkn = $uang_mkn / $jum_tunjangan;

        //pembulatan
        /*$tun_prestasi = (int)$tun_prestasi;
        $tun_daerah = (int)$tun_daerah;*/

        //dd($tun_prestasi);






        $chart1 = Charts::multi('bar','material')
                ->title("Absensi Pegawai")
                ->dimensions(0,400)
                //->template("material")
                ->colors(['#61BBB6', '#DA5C53', '#FFC107','#506F86','#288FB4'])
                ->dataset('Masuk',[50,85,71,50,80])
                ->dataset('Telat',[10,15,21,9,5])
                ->dataset('Pulang',[40,35,41,40,55])
                ->dataset('Pulang Cepat',[20,5,15,20,8])
                ->dataset('Lembur',[7,13,21,12,8])
                ->responsive(false)
                ->labels(['SKR','PLANO','PHPL','PKHKA','RLPS']);

         $chart6 = Charts::create('pie','chartjs')
                ->title("Jumlah Pegawai pada Department")
                ->labels(['SKR','PLANO','PHPL','PKHKA','RLPS'])
                ->values([20,10,60,100,60])
                ->elementLabel("total uasers")
                ->responsive(false)
                ->width(0)
                ->height(400)
                ->colors(["#FFCD56","#FF9F40","#36A2EB","#4BC0C0","#FF6384"]);

        $chart2 = Charts::create('pie','chartjs')
                ->title("Surat Izin Pegawai")
                ->labels(['Izin Sakit','Dinas Luar','Cuti','Cuti Hamil'])
                ->values([$izin_sakit,$dinas_luar,$cuti,$cuti_hamil])
                ->elementLabel("total Surat")
                ->responsive(false)
                ->width(0)
                ->height(400)
                ->colors(["#FFCD56","#FF9F40","#36A2EB","#4BC0C0"]);

        $chart3 = Charts::create('pie','chartjs')->legend(false)
                ->title("Persentase Absen Masuk")
                ->labels(["On Time","Telat"])
                ->values([30,10])
                ->elementLabel("total uasers")
                ->responsive(false)
                ->width(0)
                ->height(400)
                ->colors(["#4BC0C0","#FF6384"]);

        $chart4 = Charts::multi('line','highcharts')
                ->title("Grafik Tunjangan")
                ->dimensions(0,400)
                //->template("material")
                ->colors(['#61BBB6', '#DA5C53', '#FFC107','#506F86','#288FB4'])
                ->dataset('Tunjangan Prestasi',[$tun_prestasi])
                ->dataset('Tunjangan Daerah',[$tun_daerah])
                ->dataset('Uang Makan',[$uang_mkn])
                
                ->responsive(false)
                ->labels(['Mei 2018']);

//BISA



        $chart5 = Charts::multi('line','chartjs')
                ->title("Absensi Pegawai")
                ->dimensions(1000,50000)
                /*->template("material")*/
                ->dataset('Masuk',[22100, 22135, 20047, 20187, 18752])
                ->dataset('Telat',[13478, 15295, 15812, 14904, 14748])
                ->dataset('Pulang',[22212, 22639, 21825, 21034, 20815])
                ->responsive(true)
                ->labels(['27 Nov 2010', '26 Nov 2011', '24 Nov 2012', '30 Nov 2013', '29 Nov 2014']);
        

        return view('admin.kinerja_pegawai',compact('jum_pegawai','chart1','chart2','chart3','chart4'));
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
