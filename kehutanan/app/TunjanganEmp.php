<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class TunjanganEmp extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
 	protected $table = 'tunjangan_emp';
 	protected $primaryKey = 'ID_TUNJANGAN_EMP';
    protected $fillable = [
        
        'NIP_EMP','TUNJANGAN_DAERAH','TUNJANGAN_PRESTASI','PRESTASI_AWAL','DAERAH_AWAL','UANG_MKN', 'PPH','denda_telat','denda_pul_cpt',


    ];

}