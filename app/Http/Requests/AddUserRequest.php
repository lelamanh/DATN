<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'email'=>'required|unique:users,email',
            'name'=>'required',
            'password'=>'required',
            'address'=>'required',
            'day_of_birth'=>'required',
            'level'=>'required',
            'image'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'no empty',
            'name.required'=>'no empty',
            'password.required'=>'no empty',
            'address.required'=>'no empty',
            'day_of_birth.required'=>'no empty',
            'level.required'=>'no empty',
            'image.required'=>'no empty'
        ];
    }
}
