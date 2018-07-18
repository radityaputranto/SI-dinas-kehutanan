<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Alert;
use App\Surat;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.surat');
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
        alert()->error('Pastikan input terisi dan unique','Gagal Menyimpan Data');
        $surat = $this->validate($request, [
            
            'jenis' => 'required',
            'tgl_ijin' => 'required',
            'file_surat' => 'required',
            'keterangan' => 'required',
            
            
        ]);

        $uploadedFile = $request->file('file_surat');        
        $path = $uploadedFile->store('public/files');
        /*$file = File::create([
            'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
            'filename' => $path
        ]);*/

        $surat = new Surat([
            
            //'NAMA_EMP' => $request->get(''),
            'NIP_EMP'=> auth()->user()->NIP_EMP,
            'jenis' => $request->get('jenis'),
            'tgl_ijin' => $request->get('tgl_ijin'),
            'file_surat' => $path,
            'keterangan' => $request->get('keterangan'),
            //'tgl_submit' => date('Y-m-d'),
          
        ]);
            
            //cara panggil
        /*$path = 'public/files/UCEQ98OX61VUZHwT7iSRUAUwRbTyW49q2IZB0fBm.jpeg'
        $publicPath = \Storage::url($path);
        // storage/files/UCEQ98OX61VUZHwT7iSRUAUwRbTyW49q2IZB0fBm.jpeg
        <img src="{{ Storage::url($file->path) }}" title="{{ $file->title }}">*/

        
        $surat->save();
        alert()->success( 'Surat Izin tersimapan di database','Data Tersimpan');
        return redirect('home');
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
    public function update(Request $Request, $id)
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
