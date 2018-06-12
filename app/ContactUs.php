<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
  protected $table='contact';
  protected $fillable=['contact_name','contact_email','view','contact_message','contact_type'];
}
