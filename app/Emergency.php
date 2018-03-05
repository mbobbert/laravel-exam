<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    //
    public function emergencies()
    {
        return $this->hasMany('App\Emergency');
    }
}
