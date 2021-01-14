<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKaryawan extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'username', 'password', 'nama', 'jenis_kelamin', 
        'alamat', 'no_telpon', 'tgl_lahir', 'instansi', 'role', 'nama_mentor'
    ];

    protected $hidden = [

    ];
}
