<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('auth.login');
    }
    public function show(Request $request){
        $username = $request['username'];
        $password = $request['password'];
        if(Auth::attempt(['username'=>$username,'password'=>$password])){
            return redirect()->route('home');
        }else{
            Session::flash('error','Tài Khoản Hoặc Mật Khẩu Không Đúng');
            return redirect()->route('login');
        }
    }
}
