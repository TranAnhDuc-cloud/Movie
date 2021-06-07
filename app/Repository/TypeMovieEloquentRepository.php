<?php
namespace App\Repository;

use App\Repository\EloquentRepository;
use App\Repository\Interfaces\TypeMovieRepositoryInterface;
use Illuminate\Support\Facades\DB;


class TypeMovieEloquentRepository extends EloquentRepository implements TypeMovieRepositoryInterface{
    public function getModel(){
        return \App\Type_movie::class;
    }
    public function findHandler($handle,$id){
        return DB::table($handle)->where('id',$id);
    }
    public function getHandler($handle){
        return DB::table($handle);
    }
    public function createHandler($name,array $attributes){
        DB::table($name)->insert([
            'name' =>$attributes['name'],    
            'year' =>$attributes['year'],
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
    }
}