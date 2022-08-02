<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;
use App\FeedBack;
use App\Meal;
use App\Vehicel;
use App\Location;
use App\Booking;
class User extends Authenticatable
{
    use Notifiable;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function feedbacks(){
        return $this->hasMany(Feedback::class);
    }


    public function meals(){
        return $this->hasMany(Meal::class);
    }


    public function vehicles(){
        return $this->hasMany(vehicle::class);
    }

    public function locations(){
        return $this->hasMany(Location::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }








    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name', 'email','phone','address', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
