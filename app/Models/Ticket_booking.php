<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket_booking extends Model
{
     protected $fillable = ['name','email','movie_id','time_id','booking_date'];
     public function movie(){
     	return $this->belongsTo('App\Models\Movie');
     }
     public function time(){
     	return $this->belongsTo('App\Models\Theater_time','time_id');
     }
}
