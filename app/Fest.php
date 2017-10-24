<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fest extends Model
{
    public function festPredications()
    {
        return $this->hasMany(FestPredication::class);
    }
}
