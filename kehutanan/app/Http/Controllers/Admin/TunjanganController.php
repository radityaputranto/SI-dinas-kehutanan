<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Tunjangan;

class TunjanganController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tunjangan = Tunjangan::all()->toArray();
        
         return view('admin.list_tunjangan',compact('tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_tunjangan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tunjangan = $this->validate($request, [
            
            'ESELON' => 'required',
            'GOLONGAN' => 'required',
            'TUN_DAERAH' => 'required',
            'TUN_PRESTASI' => 'required',
            
            
            
        ]);


        $tunjangan = new Tunjangan([
          
          'golongan' => $request->get('GOLONGAN'),
          'eselon' => $request->get('ESELON'),
          'tun_daerah' => $request->get('TUN_DAERAH'),
          'tun_prestasi' => $request->get('TUN_PRESTASI'),
          
          
        ]);
 
        $tunjangan->save();
        alert()->success('You have been logged out.', 'Good bye!');
        return redirect('add_tunjangan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tunjangan)
    {
         $tunjangan = Tunjangan::findOrFail($id_tunjangan);
        return view('admin.detail',compact('tunjangan','id_tunjangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tunjangan)
    {   
        $tunjangan = Tunjangan::findOrFail($id_tunjangan);
        return view('admin.edit_tunjangan',compact('tunjangan','id_tunjangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tunjangan)
    {
        $tunjangan = Tunjangan::find($id_tunjangan);
        $this->validate($request, [
            'ESELON' => 'required',
            'GOLONGAN' => 'required',
            'TUN_DAERAH' => 'required',
            'TUN_PRESTASI' => 'required',
        ]);
        
          $tunjangan->golongan = $request->get('GOLONGAN');
          $tunjangan->eselon = $request->get('ESELON');
          $tunjangan->tun_daerah = $request->get('TUN_DAERAH');
          $tunjangan->tun_prestasi = $request->get('TUN_PRESTASI');

        $tunjangan->save();
        return redirect('list_tunjangan')->with('success','Product has been updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tunjangan)
    {

        Pegawai::find($id_tunjangan)->delete();
        /*$emp;*/
        return redirect('admin.list_tunjangan')->with('success','Product has been  deleted');
    }
}
