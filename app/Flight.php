<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table ='flights';
    protected $fillable=
    [

      'flight_status',
      'from_city',
      'to_city',
      'airplane',
      'airline',
      'distance',
      'duration',
      'cost',
      'check_in',
      'check_out',
      'tickets_Num'


    ];

    public function airline(){
  		return $this->belongsTo('App\Airline' ,'id','airline');
      }
      public function airplane(){
    		return $this->belongsTo('App\Airplane' ,'id','airplane');
        }


}
