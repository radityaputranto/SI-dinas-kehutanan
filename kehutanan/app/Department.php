<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Department extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
   /* use SoftDeletes;*/
 	protected $table = 'departemen';
 	protected $primaryKey = 'id_dept';
  /*  protected $fillable = [
        
        

    ];*/


/*    protected $dates = ['deleted_at'];*/
}