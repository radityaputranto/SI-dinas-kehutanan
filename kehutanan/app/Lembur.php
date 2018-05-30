<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Lembur extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
 	protected $table = 'lembur';
 	protected $primaryKey = 'id_lembur';
    protected $fillable = [
        
        'eselon','golongan','nominal',


    ];

}