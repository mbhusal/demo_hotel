<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booked_room extends Model
{

protected $dates = ['arrival', 'deprt'];


public function room()
    {
    	return Room::where('id', $this->room_id)->first()->roomno;
        // return $this->belongsTo('App\Room');
    }


}
