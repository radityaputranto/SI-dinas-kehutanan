<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\lembur;

class lemburController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lembur = lembur::all()->toArray();
        
         return view('admin.lembur',compact('lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_lembur');
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
        $lembur = $this->validate($request, [
            
            'ESELON' => 'required',
            'GOLONGAN' => 'required',
            'NOMINAL' => 'required',
            
            
            
            
        ]);


        $lembur = new lembur([
          
          'golongan' => $request->get('GOLONGAN'),
          'eselon' => $request->get('ESELON'),
          'nominal' => $request->get('NOMINAL'),
          
          
          
        ]);
 
        $lembur->save();
        alert()->success('You have been logged out.', 'Good bye!');
        return redirect('add_lembur');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_lembur)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_lembur)
    {   
        $lembur = lembur::findOrFail($id_lembur);
        return view('admin.edit_lembur',compact('lembur','id_lembur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_lembur)
    {
        alert()->error('Pastikan input terisi ','Gagal Menyimpan Data');
        $lembur = lembur::find($id_lembur);
        $this->validate($request, [
            
            'ESELON' => 'required',
            'GOLONGAN' => 'required',
            'NOMINAL' => 'required',
        ]);
        
          $lembur->golongan = $request->get('GOLONGAN');
          $lembur->eselon = $request->get('ESELON');
          $lembur->nominal = $request->get('NOMINAL');
          

        $lembur->save();
        alert()->success( 'Data lembur Berhasil di Update','lembur telah Terupdate');
        return redirect('lembur');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_lembur)
    {

        Pegawai::find($id_lembur)->delete();
        /*$emp;*/
        return redirect('admin.lembur')->with('success','Product has been  deleted');
    }
}
