<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\Register;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    // use RegistersUsers;
    //

    public function index(){
        return view('auth.register');
    }
    // protected function create(array $data){
    //     return User::create([   
    //         'username' => $data['username'],
    //         'email' => $data['email'],
    //         'fullname' => $data['fullname'],
    //         'level'=> 0,
    //         'active'=> 0,
    //         'email_verified_at' => $this->$email_verified_at,
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
    public function register(Register $request){
        // if($this->create($request->all())){
        //     return redirect()->route('login')->with('success','Tạo Tài Khoản Thành Công , Có Thể Đăng Nhập');
        // }
        // $email_verified_at =  hash_hmac('sha256', Str::str_random(40), config('app.key'));;
        $email_verified = Str::random(40);
        $user = new \App\User;
            $user->username = $request['username'];
            $user->password = bcrypt($request['password']);
            $user->fullname = $request['fullname'];
            $user->level = 0;
            $user->active = 0;
            $user->email = $request['email'];
            $user->remember_token =  Str::random(40);
            $user->email_verified = Str::random(40);
        $user->save();
       
        Mail::send('mail.user_active',$email_verified,function($message){
            $message->to($request->email, $request->username)
                ->subject("Verify your email address");
        });
        return redirect()->route('login')->with('success','Vui lòng xác nhận tài khoản email');
    }
    public function active($token) {
        $user = User::where('email_verified', $token);
        if ($user->count() > 0) {
            $user->update([
                'active' => 1,
                'email_verified' => null
            ]);
            $notification = 'Bạn đã xác nhận thành công';
        } else {
            $notification ='Mã xác nhận không chính xác';
        }

        return redirect(route('login'))->with('success', $notification);
    }
}
