<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Theater extends Model
{
    use SoftDeletes;
    protected $fillable = ['name','no_seats'];
    public function timings(){
    	return $this->hasMany(Theater_time::class);
    }
}
