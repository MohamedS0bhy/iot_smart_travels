<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{

    protected $fillable = [
        'id',
        'airline_status'
    ];



   public function country()
   {

       return $this->belongsTo('App\Country');

   }
public function tickets()
{
    return $this->hasMany('App\Ticket');
}
public function flights()
{
    return $this->hasMany('App\Flight');
}




}
