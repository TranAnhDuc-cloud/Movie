<?php
namespace App\Repository;

use App\Repository\EloquentRepository;
use App\Repository\Interfaces\SingleMovieRepositoryInterface;



class SingleMovieEloquentRepository extends EloquentRepository implements SingleMovieRepositoryInterface{
    public function getModel(){
        return \App\Single_movie::class;
    }
}