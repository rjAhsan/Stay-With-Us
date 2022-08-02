<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Location;
use App\Reservation;
class Booking extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
