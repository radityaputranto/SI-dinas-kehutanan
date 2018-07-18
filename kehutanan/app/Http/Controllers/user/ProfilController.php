<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Alert;

use App\Pegawai;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profil');
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
    public function edit(Request $request, $NIP_EMP)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NIP_EMP)
    {
        alert()->error('Pastikan input terisi dan unique','Gagal Menyimpan Data');
        $emp = Pegawai::find($NIP_EMP);
        $this->validate($request, [
            'NAMA_EMP' => 'required',
            'email' => 'required',
            'password' => 'required',
            'NOTELP_EMP' => 'required',
            'ALAMAT_EMP' => 'required',
            
        ]);
        
        
          $emp->NAMA_EMP = $request->get('NAMA_EMP');
          $emp->email = $request->get('email');
          $emp->password = bcrypt($request->get('password'));
          $emp->NOTELP_EMP = $request->get('NOTELP_EMP');
          $emp->ALAMAT_EMP = $request->get('ALAMAT_EMP');

        $emp->save();
        alert()->success( 'Data pegawai baru telah tersimapan di database','Update Berhasil');
        return redirect('home');
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
