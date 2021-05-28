<?php
namespace App\Repository;

use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\EloquentRepository;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface{
    public function getModel(){
        return \App\User::class;
    }
}