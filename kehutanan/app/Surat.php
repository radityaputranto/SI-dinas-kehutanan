<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Surat extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
   
 	protected $table = 'surat';
 	protected $primaryKey = 'id_surat';
    protected $fillable = [
    	'jenis' => 'required',
            
        'NIP','jenis','tgl_ijin','file_surat','keterangan',
        

    ];


    public function emp()
    {
    	return $this->belongsTo(Pegawai::class);
    }
/*    protected $dates = ['deleted_at'];*/
}