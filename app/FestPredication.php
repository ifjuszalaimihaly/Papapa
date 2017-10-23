<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FestPredication extends Model
{
    protected $table='fest_predication';

    public function fest()
    {
        return $this->belongsTo(Fest::class);
    }

    public function festDatesInYear(int $year)
    {
        FestPredication::whereYear('written_at',$year)->get();

    }
}
