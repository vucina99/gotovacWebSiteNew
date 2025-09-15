<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'date_time' , 'message' , 'phone' , 'email' , 'name' , 'is_read' , 'notes'
    ];
}
