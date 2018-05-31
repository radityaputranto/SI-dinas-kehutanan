<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Pegawai extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
 	protected $table = 'pegawai';
 	protected $primaryKey = 'NIP_EMP';

    protected $fillable = [
        
        'NAMA_EMP','NIP_EMP','GENDER','email', 'password','ID_DEPT','GOLONGAN_EMP','ESELON_EMP','NOTELP_EMP','ALAMAT_EMP','admin',


    ];


    public function dept()
    {
    	return $this->belongsTo(Department::class);
    }
/*    protected $dates = ['deleted_at'];*/
}