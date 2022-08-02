<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Booking;
class Location extends Model
{

    protected $guarded = [''];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
    

}
