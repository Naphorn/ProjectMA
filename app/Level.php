<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    // protected $fillable = ['room_no'];
    public function statusair()
    {
        return $this->hasMany(StatusAir::class);
    }
}
