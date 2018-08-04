<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\TunjanganEmp;
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

         $chart2 = Charts::create('pie','chartjs')
                ->title("Jumlah Pegawai pada Department")
                ->labels(['SKR','PLANO','PHPL','PKHKA','RLPS'])
                ->values([20,10,60,100,60])
                ->elementLabel("total uasers")
                ->responsive(false)
                ->width(0)
                ->height(400)
                ->colors(["#FFCD56","#FF9F40","#36A2EB","#4BC0C0","#FF6384"]);

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
                ->dataset('Tunjangan Prestasi',[10,75,71,30,40])
                ->dataset('Tunjangan Daerah',[5,15,61,40,60])
                ->dataset('Uang Makan',[20,35,31,50,10])
                
                ->responsive(false)
                ->labels(['27 Nov 2010', '26 Nov 2011', '24 Nov 2012', '30 Nov 2013', '29 Nov 2014']);

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
        

        return view('admin.kinerja_pegawai',compact('chart1','chart2','chart3','chart4'));
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
