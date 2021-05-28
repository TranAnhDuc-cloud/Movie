<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\Register;


class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }
    protected function create(array $data){
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'fullname' => $data['fullname'],
            'level'=> 0,
            'password' => bcrypt($data['password']),
        ]);
    }
    public function register(Register $request){
        $check = User::where('username',$request->username)->first();
        if($check){
            return redirect()->route('register')->with('error','Tài Khoản Đã Tồn Tại');
        }else{
           if($this->create($request->all())){
               return redirect()->route('login')->with('success','Tạo Tài Khoản Thành Công , Có Thể Đăng Nhập');
           }
        }
    }
}
