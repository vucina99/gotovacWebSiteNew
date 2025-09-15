<?php

namespace App\Models;

use App\Models\BlogCategory;
use App\Models\BlogImage;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\MimeTypes;

class Blog extends Model
{
    use   SoftDeletes;

    protected $fillable = [
        "title_sr",
        "content_sr",
        "part_content_sr",
        "title_en",
        "content_en",
        "part_content_en",
        "slug_sr",
        "slug_en",
        "meta_title",
        "meta_keywords",
        "meta_description",
        "blog_category_id",
        "blog_image_id",
        "date",
        "is_active"
    ];

    protected static function booted()
    {
        static::creating(function ($blog){
            $blog->date = Carbon::now();
        });
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class , "blog_category_id");
    }
    public function blogImage()
    {
        return $this->belongsTo(BlogImage::class , "blog_image_id");
    }


    public static function getExtensionFromMimeType($mimeType)
    {
        $mimeTypes = new MimeTypes();
        $extensions = $mimeTypes->getExtensions($mimeType);

        return $extensions ? $extensions[0] : null;
    }

    public function scopeActiveBlog($query)
    {
        if(Auth::check()){
            return $query;
        }
        return $query->where("is_active",true);
    }
}
