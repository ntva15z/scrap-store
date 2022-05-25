<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => trans('Tên tài khoản hoặc Mật khẩu không đúng. <br/>Vui lòng thử lại'),
            'password.required' => trans('Tên tài khoản hoặc Mật khẩu không đúng. <br/>Vui lòng thử lại'),
        ];
    }
}
