<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Tunjangan extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
 	protected $table = 'tunjangan';
 	protected $primaryKey = 'id_tunjangan';
    protected $fillable = [
        
        'eselon','golongan','tun_prestasi','tun_daerah', 


    ];

}