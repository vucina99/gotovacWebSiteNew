<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use SoftDeletes;
   protected $fillable = ["name", "name_en", "slug"];


    public function blogs()
    {
        return $this->hasMany(Blog::class , "blog_category_id");
    }
}
