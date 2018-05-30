<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Potongan extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
 	protected $table = 'potongan_tunjangan';
 	protected $primaryKey = 'id_potongan';
    protected $fillable = [
        
        'eselon','golongan','tidak_masuk_tk','tidak_masuk_dk','telat_psw_1','telat_psw_2','telat_psw_3','telat_psw_4','tdk_absen','telat_senam','tdk_senam',


    ];

}