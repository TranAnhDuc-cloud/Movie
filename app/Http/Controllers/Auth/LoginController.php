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
       $check = [
            'username' => $request->username,
            'password' => $request->password,
            'active' => 1
       ];
        if(!Auth::attempt($check)){
           Session::flash('error',trans('auth.youcannotlogin'));
            return redirect()->back();
        }
        return redirect('/');
    }
}
