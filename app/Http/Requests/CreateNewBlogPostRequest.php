<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateNewBlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    protected function prepareForValidation()
    {
        if ($this->has('blog')) {
            // Dekodiranje JSON stringa
            $blog = json_decode($this->blog, true);
            $this->merge([
                'blog' => $blog
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            "blog.category" => "required",
            "blog.title" => "required|min:2",
            "blog.title_en" => "required|min:2",
            "blog.alt" => "required|min:2",
            "blog.imgTitle" => "required|min:2",
            "blog.content" => "required|min:2",
            "blog.content_en" => "required|min:2",
            "blog.metaKeywords" => "required|min:2",
            "blog.metaDescription" => "required|min:2",
            "blog.metaTitle" => "required|min:2",
            "blog.partContent" => "required|max:360",
            "blog.partContent_en" => "required|max:360",
            "image" => "required|image|max:10000",
        ];
    }

    public function attributes(): array
    {
        return [
            "blog.category" => "' Kategorija '",
            "blog.title" => "' Naslov (SR) '",
            "blog.title_en" => "' Naslov (EN) '",
            "blog.alt" => "' Slika alt '",
            "blog.imgTitle" => "' Slika Title '",
            "blog.content" => "' Sadržaj blog objave (SR) '",
            "blog.content_en" => "' Sadržaj blog objave (EN) '",
            "blog.metaKeywords" => "' Meta keywords '",
            "blog.metaDescription" => "' Meta description '",
            "blog.metaTitle" => "' Meta title '",
            "blog.partContent" => "' Deo sadržaja (za blog card) (SR) '",
            "blog.partContent_en" => "' Deo sadržaja (za blog card) (EN) '",
            "image" => "' Početna slika '",
        ];
    }
}
