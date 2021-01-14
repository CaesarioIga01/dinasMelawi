<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenKaryawan extends Model
{
    protected $table = 'user_presences';

    protected $fillable = [
        'user_id', 'checkin', 'checkout', 'nama'
    ];

    protected $hidden = [
        //
    ];
}
