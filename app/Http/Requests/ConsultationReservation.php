<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ConsultationReservation extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'number' => ['required', 'min:6', 'max:15'],
            'email' => ['required', 'email', 'max:255'],
            'date_time' => ['required', 'date_format:Y-m-d H:i:s', 'unique:consultations,date_time'],
            "message" => "required|max:1500|min:3",
        ];
    }

//    public function messages(): array
//    {
//        return [
//            "message.required" => "Polje 'Vaša poruka' je obavezno.",
//            "message.min" => "Polje 'Vaša poruka' mora imati najmanje :min karaktera.",
//            "message.max" => "Polje 'Vaša poruka' može imati najviše :max karaktera.",
//            'name.regex' => "Polje 'Vaše ime' može da sadrži najviše jedan razmak.",
//            'lastname.regex' => "Polje 'Vaše prezime' može da sadrži najviše jedan razmak.",
//        ];
//    }


    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = [];
        foreach ($validator->errors()->getMessages() as $key => $messages) {
            $path = explode('.', $key);
            if (count($path) > 2 && $path[0] === 'educations') {
                $index = $path[1];
                $field = $path[2];
                $errors['educations'][$index][$field] = $messages;
            } else {
                $errors[$key] = $messages;
            }
        }

        throw new HttpResponseException(response()->json(['errors' => $errors], 422));
    }

}
