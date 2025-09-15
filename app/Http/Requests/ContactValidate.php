<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255' , 'min:2'],
            'subject' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required','email', 'max:255'],
            "message" => "required|max:1500|min:3",
        ];
    }
    protected function getRedirectUrl()
    {
        // umesto da ide samo na back(), dodaj anchor
        return url()->previous() . '#contact-form';
    }


}
