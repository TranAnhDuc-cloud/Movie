<?php
namespace App\Repository;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface{
    public function getModel(){
        return \App\Category::class;
    }
    
    public function getAll(){
        return \App\Category::paginate(10);
    }

    public function getonlyTrashed(){
        return  \App\Category::onlyTrashed()->paginate(10);
    }

    public function getwithTrashed(){
        return  \App\Category::withTrashed()->paginate(10);
    }

    public function restore($id){
        return \App\Category::withTrashed()->where('id', $id)->restore();
     }
 
     public function deleteHard($id){
         return \App\Category::withTrashed()->where('id', $id)->forceDelete();
     }
   
}