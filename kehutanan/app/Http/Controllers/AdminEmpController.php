<?php

namespace App\Http\Controllers;

use Alert;
use App\Pegawai;
use Illuminate\Http\Request;

class AdminEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Pegawai::all()->toArray();
         return view('admin.home',compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_emp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = $this->validate($request, [
            'NAMA_EMP' => 'required|unique:pegawai',
            'NIP_EMP' => 'required|unique:pegawai',
            'email' => 'required|unique:pegawai',
            'password' => 'required',
            'ID_DEPT' => 'required',
            'GOLONGAN_EMP' => 'required',
            'ESELON_EMP' => 'required',
            
            
        ]);


        $emp = new Pegawai([
          'NAMA_EMP' => $request->get('NAMA_EMP'),
          'NIP_EMP' => $request->get('NIP_EMP'),
          'GENDER' => $request->get('GENDER'),
          'email' => $request->get('email'),
          'password' => bcrypt($request->get('password')),
          'ID_DEPT' => $request->get('ID_DEPT'),
          'GOLONGAN_EMP' => $request->get('GOLONGAN_EMP'),
          'ESELON_EMP' => $request->get('ESELON_EMP'),
          'NOTELP_EMP' => $request->get('NOTELP_EMP'),
          'ALAMAT_EMP' => $request->get('ALAMAT_EMP'),
          
        ]);
 
        $emp->save();
        /*return redirect('/crud');*/
        /*$emp = Pegawai::create($request->all());*/
        /*Pegawai::create($emp);*/
/*        return Pegawai::create([

            'NIP_EMP' => $data['NIP_EMP'],
            'NAMA_EMP' => $data['NAMA_EMP'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
*/      /*return back()->with('success', 'Product has been added');*/
        alert()->success('You have been logged out.', 'Good bye!');
        return redirect('home');
        /*return redirect('home')->with('message', 'Artikel berhasil dibuat!');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($NIP_EMP)
    {
         $emp = Pegawai::findOrFail($NIP_EMP);
        return view('admin.detail_emp',compact('emp','NIP_EMP'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($NIP_EMP)
    {
        $emp = Pegawai::findOrFail($NIP_EMP);
        return view('admin.edit_emp',compact('emp','NIP_EMP'));
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
        $emp = Pegawai::find($NIP_EMP);
        $this->validate($request, [
            'NAMA_EMP' => 'required',
            'NIP_EMP' => 'required',
            'email' => 'required',
            'password' => 'required',
            'ID_DEPT' => 'required',
            'GOLONGAN_EMP' => 'required',
            'ESELON_EMP' => 'required',
        ]);
        
        
          $emp->NAMA_EMP = $request->get('NAMA_EMP');
          $emp->NIP_EMP = $request->get('NIP_EMP');
          $emp->GENDER = $request->get('GENDER');
          $emp->email = $request->get('email');
          $emp->password = bcrypt($request->get('password'));
          $emp->ID_DEPT = $request->get('ID_DEPT');
          $emp->GOLONGAN_EMP = $request->get('GOLONGAN_EMP');
          $emp->ESELON_EMP = $request->get('ESELON_EMP');
          $emp->NOTELP_EMP = $request->get('NOTELP_EMP');
          $emp->ALAMAT_EMP = $request->get('ALAMAT_EMP');

        $emp->save();
        return redirect('home')->with('success','Product has been updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIP_EMP)
    {

        Pegawai::find($NIP_EMP)->delete();
        /*$emp;*/
        return redirect('home')->with('success','Product has been  deleted');
    }
}
