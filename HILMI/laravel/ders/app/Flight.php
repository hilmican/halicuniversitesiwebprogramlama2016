<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    //tablo flights, id, created_at, updated_at

    public function Seat()
    {
    	//one to one hasOne
    	//one to many hasMany
    	//many to many belongsToMany
    	return $this->hasMany('App\Seat');
    	//flights, seats, flight_seats.
    }

    public function Pilot()
    {
    	//one to one hasOne
    	//one to many hasMany
    	//many to many belongsToMany
    	return $this->belongsToMany('App\Pilot');
    	//flights, seats, flight_seats.
    }
}
