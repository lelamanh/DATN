<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiplomaRequest extends FormRequest
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
            'type'=>'required|min:2,'.request()->id,
            'field'=>'required|min:2',
        ];
    }
    public function messages()
    {
        return [
            'type.required'=>'no empty',
            'field.required'=>'no empty',
        ];
    }
}
