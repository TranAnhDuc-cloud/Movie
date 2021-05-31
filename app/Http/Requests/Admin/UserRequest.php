<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|min:6|max:30|unique:users',
            'password' => 'required|min:8|max:20',
            'password_confirmation' => 'required|same:password',
            'fullname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'level' => 'required|boolean',
        ];
    }
    public function messages(){
        return [
            // 'username.required' => " Bạn Phải Nhập Username Của Mình Chứ",
            // 'username.min' => " Username Phải Đủ 6 Ký Tự" ,
            // 'username.max' => " Username Giới Hạn 30 Ký Tự",
            // 'username.unique' => " Username Đã Tồn Tại ",
            // 'password.required' => " Bạn Chưa Nhập Password Rồi",
            // 'password.min' => " Password Phải Đủ 8 Ký Tự",
            // 'password.max' => " Password Không Quá 20 Ký Tự",
            // 'fullname.required' => " Bạn Chưa Nhập Tên Của Bạn Rồi",
            // 'fullname.string' => " Tên Của Bạn Không Nên Chứ Ký Tự Số",
            // 'email.required' => " Bạn Chưa Nhập Email Rồi",
            // 'email.email' => " Dữ Liệu Không Phải Là Email ",
            // 'email.unique:users,email' => " Email Này Không Thể Dùng ",
            // 'level.required' => " Bạn Chưa Chọn Quyền Truy Cập Rồi",
            // 'level.boolean' => " Chỉ Được Phép Nhập Ký Tự 0 Hoặc 1",
        ];
    }
}
