<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'level_name', 'building_id', 'imglink'
    ];

    // public function building() {
    //     return $this->hasOne('App\Building', 'id', 'building_id');
    // }

    // public function status() {
    //     return $this->hasMany('App\StatusAir', 'level_id', 'id');
    // }
}
