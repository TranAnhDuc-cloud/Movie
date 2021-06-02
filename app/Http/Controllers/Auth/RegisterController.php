<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\Auth\Register;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

    public function index(){
        return view('auth.register');
    }

    public function register(Register $request){
        $email_verified = Str::random(40);
        $email = $request->email;
        $username = $request->username;
      $user =  User::create([
            'username' => $username,
            'password' => bcrypt($request->password),
            'fullname' => $request->fullname,
            'email' => $email,
            'remember_token' => Str::random(20),
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
