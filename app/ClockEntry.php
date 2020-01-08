<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClockEntry extends Model
{
    protected $casts = [
        'enterDate' => 'datetime',
        'leaveDate' => 'datetime',
    ];

    public function user() {
        return belongsTo('App\User');
    }
}
