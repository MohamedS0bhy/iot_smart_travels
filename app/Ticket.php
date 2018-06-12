<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

protected $table='tickets';
    protected $fillable = [
        'flight','ticket_status','qr','gate','traveller','user_id'
  ];




public  function traveler()
{
    return $this->belongsTo('App\Traveler');
}


public function airline()
{
return $this->belongsTo('App\Airline');
}
public function city()
{
return $this->belongsTo('App\City');
}
public function user()
{
return $this->belongsTo('App\User');
}


}
