<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'building_name'
    ];

    // public function levels() {
    //     return $this->hasMany('App\Level', 'building_id', 'id');
    // }
}
