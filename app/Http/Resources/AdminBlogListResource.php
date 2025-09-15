<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminBlogListResource extends JsonResource
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
            "title" => $this->title_sr,
            "slug" => $this->slug_sr,
            "isActive" => $this->is_active,
            "category" => new BlogCategoryResource($this->blogCategory)
        ];
    }
}
