<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function username(){

        return 'username';
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('auth.login');
    }
    
    public function redirectTo(Request $request){
        $remember = $request->has('remember') ? true : false;
       $check = [
            'username' => $request->username,
            'password' => $request->password,
            'active' => 1
       ];
        if(!Auth::attempt($check,$remember)){
           Session::flash('error',trans('admin.usernameorpasswordfalse'));
            return redirect()->back();
        }
        return redirect('/');
    }
}
