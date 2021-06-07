<?php
namespace App\Repository;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface{
    public function getModel(){
        return \App\Category::class;
    }
    public function getonlyTrashed(){
        return  \App\Category::onlyTrashed()->get();
    }
    public function getwithTrashed(){
        return  \App\Category::withTrashed()->get();
    }
}