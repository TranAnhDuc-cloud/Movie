<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
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
    public function messages(){
        // return [
        //     'username.required' => " Bạn Phải Nhập Username Của Mình Chứ",
        //     'password.required' => " Bạn Chưa Nhập Password Rồi"
        // ];
    }
}
