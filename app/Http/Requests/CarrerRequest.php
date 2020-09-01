<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarrerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'carrer_name' => 'required',
            'carrer_name_en' => 'required',
            'country_id' => 'required',
        ];
    }
}
