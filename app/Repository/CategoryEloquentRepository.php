<?php
namespace App\Repository;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface{
    public function getModel(){
        return \App\Category::class;
    }
    public function create(array $attributes){
        $category = new \App\Category;
          $category->name = $attributes['name'];
          $category->description = $attributes['description'];
          $category->url_picture = $attributes['url_picture'];
          return $category->save();
    }
}