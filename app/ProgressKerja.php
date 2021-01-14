<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressKerja extends Model
{
    protected $table = 'user_tasks';

    protected $fillable = [
        'user_id', 'task'
    ];

    protected $hidden = 
    [
        //
    ];

    // public function user()
    // {
    //     return $this->hasMany(User::class, 'id');
    // }
}
