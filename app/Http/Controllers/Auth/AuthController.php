<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

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
        // Return home after login
        $this->createUser($getInfo,$provider); 
        return redirect()->to('/');
    }
    protected function createUser($getInfo,$provider){
        $user = User::where('email', $getInfo->email)->first();
            if (!$user) {
                $user = new User();
                $user->username = $getInfo->name;
                $user->fullname = $getInfo->name;
                $user->email = $getInfo->email;
                $user->level = 0;
                $user->active = 1;
                $user->provider = $provider;
                $user->provider_id = $getInfo->id;
                $user->avatar = $getInfo->avatar;
                $user->save();
            }
        Auth::login($user,true);
    }
}
