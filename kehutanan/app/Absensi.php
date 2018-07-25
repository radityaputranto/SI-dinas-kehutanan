<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Absensi extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
 	protected $table = 'absensi';
 	protected $primaryKey = 'ID_ABSEN';
    protected $fillable = [
        'NIP_EMP','SCAN_KELUAR','SCAN_LEMBUR','SCAN_PUL_CPT','SCAN_TELAT','SCAN_MASUK','TGL_ABSEN'
        

    ];


    public function emp()
    {
    	return $this->belongsTo(Pegawai::class);
    }
/*    protected $dates = ['deleted_at'];*/
}