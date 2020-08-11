<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required',
            // '_token' => 'required|token'
        ];
    }

    public function messages()
    {
        return [
            'username' => '用户名都不填，滚！',
            'password' => '密码都没有，扯淡！',
        ];
    }
}
