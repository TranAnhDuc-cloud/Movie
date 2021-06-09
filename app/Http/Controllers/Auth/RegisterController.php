<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Register;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    public function register(Register $request){
        $email_verified = Str::random(40);
        $email = $request->email;
        $username = $request->username;
        $user =  User::create([
            'username' => $username,
            'password' => bcrypt($request->password),
            'fullname' => $request->fullname,
            'email' => $email,
            'remember_token' => Str::random(10),
            'email_verified' => $email_verified,
            'active' => 0,
            'level' => 0,
        ]);
        if($user->save()){
            Mail::send('mail.user_active',['email_verified'=>$email_verified],function($message) use($username,$email){
                $message->to($email,$username)->subject("Verify your email address");
            });
            return redirect()->route('login')->with('success',trans('auth.pleasecheckemail'));
        }
    }
    
    public function active($token) {
        // $code = $request['inputCode'];
        $user = User::where('email_verified', $token);
        if ($user->count() > 0) {
            $user->update([
                'active' => 1,
                'email_verified' => null
            ]);
            $notification = trans('auth.verified-successfully');
        } else {
            $notification =trans('auth.verified-error');
        }
        return redirect()->route('login')->with('success', $notification);
    }

}
