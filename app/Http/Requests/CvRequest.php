<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
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
        'file_number' => 'required',
        'job_ar' => 'required',
        'job_en' => 'required',
        'nationality_ar' => 'required',
        'nationality_en' => 'required',
        'religion_ar' => 'required',
        'religion_en' => 'required',
        'age' => 'required',
        'expertise' => 'required',
        'social_status_ar' => 'required',
        'social_status_en' => 'required',
        'children' => 'required',
        'home_business' => 'required',
        'cooking' => 'required',
        'elderly' => 'required',
        'gardens' => 'required',
        'education' => 'required',
        'university' => 'required',
        'appearance' => 'required',
        'face' => 'required',
        'english' => 'required'
        ];
    }
}
