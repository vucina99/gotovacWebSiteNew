<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogImage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "path",
        "title",
        "alt"
    ];
}
