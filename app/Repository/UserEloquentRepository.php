<?php
namespace App\Repository;

use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\EloquentRepository;
use Illuminate\Support\Facades\Hash;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface{
    public function getModel(){
        return \App\User::class;
    }
    public function create(array $attributes){
        $user = new \App\User;
          $user->username = $attributes['username'];
          $user->password = Hash::make('password');
          $user->fullname = $attributes['fullname'];
          $user->level = $attributes['level'];
          $user->email = $attributes['email'];
          $user->remember_token =  rand(1,1000);
          $user->email_verified_at = now();
          return $user->save();
    }
    
}