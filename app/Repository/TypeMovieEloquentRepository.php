<?php
namespace App\Repository;

use App\Repository\EloquentRepository;
use App\Repository\Interfaces\TypeMovieRepositoryInterface;
use Illuminate\Support\Facades\DB;

class TypeMovieEloquentRepository extends EloquentRepository implements TypeMovieRepositoryInterface{
    public function getModel(){
        return \App\Type_movie::class;
    }
}