<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => "required | min:3 | max : 100",
            'description' => "required | min:3 ",
            'img' => "nullable | image | max:20480 ",
            'link_to_project' => "nullable | url ",
            "technologies" => "",
        ];
    }

    public function messages()
    {
        return [
            'title.min' => "messaggio custom titolo corto",
            'description.required' => "custom: la descrizione è richiesta",
        ];
    }
}
