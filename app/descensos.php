<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class descensos extends Model
{
    public function carrera()
    {
        return $this->belongsTo('carrera');
    }
    public function piraguistas()
    {
        return $this->belongsTo('piraguistas');
    }
    public function tablanm()
    {
        return $this->hasMany('tablanm');
    }
}
