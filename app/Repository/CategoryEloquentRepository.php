<?php
namespace App\Repository;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface{
    public function getModel(){
        return \App\Category::class;
    }
}