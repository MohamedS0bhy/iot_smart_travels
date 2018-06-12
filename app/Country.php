<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table ='countries';
    protected $fillable = [
        'id',
        'country_status',
        'user_id'

    ];


public function cities()
{

    return $this->hasMany('App\Country');
}

public function airlines()
{
    return $this->hasMany('App\Airline');

}




}
