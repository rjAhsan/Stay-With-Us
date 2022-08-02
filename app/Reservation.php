<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;
class Reservation extends Model
{

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
