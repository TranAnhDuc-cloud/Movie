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

    public function getonlyTrashed(){
        return  \App\Movie::onlyTrashed()->get();
    }

    public function getwithTrashed(){
        return  \App\Movie::withTrashed()->get();
    }

    public function category(){
        return Category::all();
    }

    public function country(){
        return Contry::all();
    }

    public function typeMovie(){
        return Type_movie::all();
    }
    function menu(){
        return Menu::all();
    }
    
     function movies(){
        return  Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
    }
    
     function news(){
        return Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
    }
    
    function sameCategory($social){
        return Movie::where('categories_id',$social->categories_id)->inRandomOrder()->get();
    
    }
    public function detail($id){
        $cate = Category::select('*')->inRandomOrder()->offset(4)->limit(3)->get();
        $detail = Movie::find($id);
        $sameCategory = $this->sameCategory($detail);
        return view('user.detail.detail')->with([
            'cate'=>$cate,
            'detail' =>$detail,
            'sameCategory'=>$sameCategory,
            'menu'=>$this->menu(),
            'movies'=>$this->movies(),
            'category'=>$this->category(),
            'new'=>$this->news(),
            ]);
    }

    public function watch($id){
         $watch = Movie::find($id);
         $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
         return view('user.detail.watch')->with([
            'menu'=>$this->menu(),
            'movies'=>$this->movies(),
            'category'=>$this->category(),
            'new'=>$this->news(),
             'view'=>$view,
             'watch' =>$watch,
             'sameCategory'=>$this->sameCategory($watch),
             ]);
    }

    

    
    
}