<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
   use SoftDeletes;
    protected $fillable = ['name','theater_id','start_date','end_date','title','img'];
   public function theater()
    {
        return $this->belongsTo('App\Models\theater');
    }
}
