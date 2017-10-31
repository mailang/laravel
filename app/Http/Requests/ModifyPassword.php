<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifyPasswordRequest extends FormRequest
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
            'oldpassword'=>'required',
            'password'=>'required|min:6|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'oldpassword.required'=>'请输入原密码',
            'password.required' => '请输入新密码',
            'password.min' => '密码最少为:min',
            'password.confirmed'=> '确认密码不符'
        ];
    }
}
