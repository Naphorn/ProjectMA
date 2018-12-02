<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusAir extends Model
{
    protected $table = 'status_airs';
    protected $fillable = ['level_id','room_no','cool_temp','humidity','room_temp','volt_cool','current_cool','current_hot','wind_speed','performance','power_status'];
    public function level()
    {
        return $this->belongsTo(Level::class,'level_id');
    }
}
