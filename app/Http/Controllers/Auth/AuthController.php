<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){
        try {
            $getInfo = Socialite::driver($provider)->user(); 
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
        $user = $this->createUser($getInfo,$provider); 
        auth()->login($user,true); 
        return redirect()->to('/');
    }
    function createUser($getInfo,$provider){
        $email = User::where('email', $getInfo->email)->first();
        if (!$email) {
            $user = User::create([
                'username'     => $getInfo->name,
                'fullname' => $getInfo->name,
                'email'    => $getInfo->email,
                'password' => $getInfo->name,
                'active' => 1 ,
                'level' => 0,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
