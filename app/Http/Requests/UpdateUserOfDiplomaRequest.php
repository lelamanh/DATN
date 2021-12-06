<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserOfDiplomaRequest extends FormRequest
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
            'id_user'=>'required|min:1,'.request()->id,
            'id_diploma'=>'required|min:1',
            'time_start'=>'',
            'time_end'=>'',
            'level_unit'=>'required|min:2',
            'rating'=>'required|min:2',
            'date_issue'=>'required|min:2',
            'user_accept'=>'required|min:2',
        ];
    }
    public function messages()
    {
        return [
            'id_user.required'=>'no empty',
            'id_diploma.required'=>'no empty',
            'level_unit.required'=>'no empty',
            'rating.required'=>'no empty',
            'date_issue.required'=>'no empty',
            'user_accept.required'=>'no empty',
        ];
    }
}
//'time_start.required'=>'no empty',
//'time_end.required'=>'no empty',