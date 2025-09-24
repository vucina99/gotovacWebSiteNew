<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => app()->getLocale() == "sr" ? $this->title_sr : $this->title_en,
            "date" => Carbon::parse($this->date)->format("d.m.Y"),
            "content" =>  app()->getLocale() == "sr" ? $this->content_sr : $this->content_en,
            "category" => app()->getLocale() == "sr" && $this->blogCategory ? $this->blogCategory->name : $this->blogCategory->name_en,
            "image" => new BlogImageResource($this->blogImage),
            "metaDescription" => $this->meta_description,
            "metaKeywords" => $this->meta_keywords,
            "metaTitle" => $this->meta_title,

        ];
    }
}
