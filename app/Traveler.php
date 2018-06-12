<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{

protected $table ='travelers';
    protected $fillable = [

        'name',
        'email',
        'phone_number',
        'passport_number',
        'from_city',
        'to_city',
        'nationality',
        'traveller_status',
        'user_id',


    ];




}
