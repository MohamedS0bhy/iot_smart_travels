<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
     protected $table ='airplanes';

     public function flights()
     {
         return $this->hasMany('App\Flight');
     }

}
