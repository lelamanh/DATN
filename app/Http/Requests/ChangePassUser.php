<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassUser extends FormRequest
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
            'passwordold'=>'required|min:6',
            'passwordnew'=>'required|min:6',
            'email'=>'required|email',
        ];
    }
    public function messages()
    {
        return [
            'passwordold.required'=>'no empty',
            'passwornew.required'=>'no empty',
            'email.required'=>'no empty',
        ];
    }
}
