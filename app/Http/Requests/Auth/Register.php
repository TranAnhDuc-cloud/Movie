<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\MessageBag;


class Register extends FormRequest
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
            'username' => 'required|min:6|max:10|unique:users',
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            // 'username.required'=>'Phải Nhập Họ Tên Chứ',
            // 'username.min'=>'Username Gì Ngắn Quá Vậy',
            // 'username.max'=>'Username Dài Thế Bro',
            // 'fullname.required'=>'Chưa Nhập Tên Đầy Đủ Bro',
            // 'email.required'=>'Chưa Nhập Email Kìa',
            // 'email.email'=>'Email Chưa Hợp Lệ Nhé',
            // 'password.required'=>'Phải Nhập Password Chứ',
            // 'password.min'=> 'Password Gì Ngắn Vậy Phải Đủ 8 Kí Tự Nhé',
            // 'password_confirm.required'=>'Nhập Lại Password Đi Chứ',
            // 'password_confirm.same:password'=>'Password Nhập Lại Bị Sai Kìa',
        ];
    }
}
