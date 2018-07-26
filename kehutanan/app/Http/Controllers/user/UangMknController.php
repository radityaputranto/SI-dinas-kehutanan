<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\TunjanganEmp;
use PDF;
class UangMknController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.uang_mkn');
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

    public function generatePDF()

    {

       /* $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('admin.tes', $data);*/

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

       /* $data = ['title' => 'Welcome to HDTuto.com'];


        $pdf = PDF::loadView('admin.tes', $data);*/

        $pdf = PDF::loadView('pdf_view/pdf_uang_mkn',compact('tun_emp' ,'uang_mkn'));
        return $pdf->download('Uang Makan .pdf');

    }
}
