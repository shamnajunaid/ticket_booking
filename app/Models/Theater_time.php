<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theater_time extends Model
{
    use SoftDeletes;
     protected $fillable = ['theater_id','show_time'];
}
