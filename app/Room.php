<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $fillable = [
        'roomtype', 'facilites', 'cost','status', 'roomno', 'bedno',
    ];


    protected $hidden = [
        'remember_token','roomno',
    ];

     
    public function booked_room()
    {
        return $this->hasOne('App\Booked_room');
    }
}
