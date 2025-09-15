<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogListResource extends JsonResource
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
            "slug" =>  app()->getLocale() == "sr" ? $this->slug_sr : $this->slug_en,
            "partContent" =>  app()->getLocale() == "sr" ?  $this->part_content_sr : $this->part_content_en ,
            "date" => Carbon::parse($this->date)->format("d.m.Y"),
            "category" => app()->getLocale() == "sr" && $this->blogCategory ? $this->blogCategory->name : $this->blogCategory->name_en,
            "image" => new BlogImageResource($this->blogImage),

        ];
    }
}
