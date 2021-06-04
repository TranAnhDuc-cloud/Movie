<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SocialAccountService;
use App\SocialAccount;
use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;


class FacebookController extends Controller
{
    //
    public function redirect($social){
        return FacadesSocialite::driver($social)->redirect();
    }
    public function callback($social){
        // $user = SocialAccountService::createOrGetUser(FacadesSocialite::driver($social)->user(), $social);
       $user = FacadesSocialite::driver($social)->user();
       $account = new SocialAccount([
        'provider_user_id' => $user->getId(),
        'provider' => $social
        ]);
       $email = User::whereEmail($user->getEmail())->first();
       if(!$email){
            $save = User::create([
                'username' => $user->getName(),
                'password' => bcrypt($user->getName()),
                'fullname' => $user->getName(),
                'email' => $user->getEmail(),
                'active' => 1,
                'level' => 0,
            ]);
       }
        $save->save();
        Auth::login($save);
        return redirect('/');
    }
}
