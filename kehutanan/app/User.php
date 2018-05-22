<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*protected $username = 'NIP_EMP';*/
    protected $primaryKey = 'NIP_EMP';
    protected $table = 'pegawai';
    protected $fillable = [
        // 'name', 'email', 'password','admin',
        
        'NIP_EMP', 'NAMA_EMP','email', 'password','admin',


    ];

    public function dept()
    {

        return $this->hasOne(Department::class, 'ID_DEPT', 'ID_DEPT');

    }
    /**11
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
