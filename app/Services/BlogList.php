<?php

namespace App\Services;

use App\Models\Blog;

class BlogList
{
    public function getData($selectedCategory, $request)
    {
        $blogs = Blog::with("blogCategory")->activeBlog();

        if (!empty($selectedCategory)) {
            $blogs->whereHas('blogCategory', function ($query) use ($selectedCategory) {
                $query->where('slug', $selectedCategory);
            });
        }
        if(isset($request->search) && !empty($request->search)){
            if(app()->getLocale() == "sr"){
                $blogs->where("title_sr" , "LIKE" , "%". $request->search ."%");
            }else{
                $blogs->where("title_en" , "LIKE" , "%". $request->search ."%");
            }
        }

        return $blogs->paginate(12);
    }

}
