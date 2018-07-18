<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;  
use App\Potongan;

class PotonganController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potongan = Potongan::all()->toArray();
        
         return view('admin.potongan',compact('potongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_potongan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        alert()->error('Pastikan input terisi ','Gagal Menyimpan Data');
        $potongan = $this->validate($request, [
            
            'ESELON' => 'required',
            'GOLONGAN' => 'required',
            'Tdk_masuk_tk'=> 'required',
            'Tdk_masuk_dk'=> 'required',
            'Telat_psw_1'=> 'required',
            'Telat_psw_2'=> 'required',
            'Telat_psw_3'=> 'required',
            'Telat_psw_4'=> 'required',
            'Tdk_absen'=> 'required',
            'Telat_senam'=> 'required',
            'Tdk_senam'=> 'required',

            
            
            
        ]);



        $potongan = new Potongan([
          
          'golongan' => $request->get('GOLONGAN'),
          'eselon' => $request->get('ESELON'),
          'tidak_masuk_tk' => $request->get('Tdk_masuk_tk'),
          'tidak_masuk_dk' => $request->get('Tdk_masuk_dk'),
          'telat_psw_1' => $request->get('Telat_psw_1'),
          'telat_psw_2' => $request->get('Telat_psw_2'),
          'telat_psw_3' => $request->get('Telat_psw_3'),
          'telat_psw_4' => $request->get('Telat_psw_4'),
          'tdk_absen' => $request->get('Tdk_absen'),
          'telat_senam' => $request->get('Telat_senam'),
          'tdk_senam' => $request->get('Tdk_senam'),
          
          
          
        ]);
 
        $potongan->save();
        alert()->success('You have been logged out.', 'Good bye!');
        return redirect('add_potongan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_potongan)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_potongan)
    {   
        $potongan = Potongan::findOrFail($id_potongan);
        return view('admin.edit_potongan',compact('potongan','id_potongan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_potongan)
    {
        alert()->error('Pastikan input terisi ','Gagal Menyimpan Data');
        $potongan = Potongan::find($id_potongan);
        $this->validate($request, [
            
            'ESELON' => 'required',
            'GOLONGAN' => 'required',
            
            'Tdk_masuk_tk'=> 'required',
            'Tdk_masuk_dk'=> 'required',
            'Telat_psw_1'=> 'required',
            'Telat_psw_2'=> 'required',
            'Telat_psw_3'=> 'required',
            'Telat_psw_4'=> 'required',
            'Tdk_absen'=> 'required',
            'Telat_senam'=> 'required',
            'Tdk_senam'=> 'required',
        ]);
        
          $potongan->golongan = $request->get('GOLONGAN');
          $potongan->eselon = $request->get('ESELON');
          $potongan->tidak_masuk_tk = $request->get('Tdk_masuk_tk');
          $potongan->tidak_masuk_dk = $request->get('Tdk_masuk_dk');
          $potongan->telat_psw_1 = $request->get('Telat_psw_1');
          $potongan->telat_psw_2 = $request->get('Telat_psw_2');
          $potongan->telat_psw_3 = $request->get('Telat_psw_3');
          $potongan->telat_psw_4 = $request->get('Telat_psw_4');
          $potongan->tdk_absen = $request->get('Tdk_absen');
          $potongan->telat_senam = $request->get('Telat_senam');
          $potongan->tdk_senam = $request->get('Tdk_senam');
          
        //var_dump($potongan);
        $potongan->save();
        alert()->success( 'Data Potongan Berhasil di Update','Potongan telah Terupdate');
        return redirect('data_potongan');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_potongan)
    {

    
    }

    public function export_excel(){
        $potongan = Potongan::select('eselon','golongan','tidak_masuk_tk','tidak_masuk_dk','telat_psw_1','telat_psw_2','telat_psw_3','telat_psw_4','tdk_absen','telat_senam','tdk_senam')->get();
        return Excel::create('Data Potongan Absensi', function($excel) use ($potongan){
            $excel->sheet('mysheet', function($sheet) use ($potongan){
                $sheet->fromArray($potongan);
            });
        })-> download('xls');
    }
}
