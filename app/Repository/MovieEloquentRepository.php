<?php
namespace App\Repository;

use App\Category;
use App\Contry;
use App\Menu;
use App\Movie;
use App\Repository\EloquentRepository;
use App\Repository\Interfaces\MovieRepositoryInterface;
use App\Type_movie;

class MovieEloquentRepository extends EloquentRepository implements MovieRepositoryInterface{
    
    public function getModel(){
        return \App\Movie::class;
    }

    // Lấy Movie Đã Xóa Mềm
    public function getonlyTrashed(){
        return  \App\Movie::onlyTrashed()->paginate(10);
    }

    // Lấy Movie Chưa Xóa
    public function getwithTrashed(){
        return  \App\Movie::withTrashed()->paginate(10);
    }

    public function getAll(){
        return \App\Movie::paginate(10);
    }

    // public function menu(){
    //     return Menu::all();
    // }
    
    // public function movies(){
    //     return  Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
    // }
    
    // public function news(){
    //     return Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
    // }
    
    // public function sameCategory($social){
    //     return Movie::where('categories_id',$social->categories_id)->inRandomOrder()->get();
    // }

    public function restore($id){
        return \App\Movie::withTrashed()->where('id', $id)->restore();
     }
 
     public function deleteHard($id){
         return \App\Movie::withTrashed()->where('id', $id)->forceDelete();
     }
}