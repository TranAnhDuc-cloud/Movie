<?php
namespace App\Repository;

use App\Category;
use App\Menu;
use App\Movie;
use App\Repository\EloquentRepository;
use App\Repository\Interfaces\MovieRepositoryInterface;

class MovieEloquentRepository extends EloquentRepository implements MovieRepositoryInterface{
    public function getModel(){
        return \App\Movie::class;
    }
    public function create(array $attributes){
        $movie = new \App\Movie;
          $movie->title = $attributes['title'];
          $movie->name = $attributes['name'];
          $movie->directors = $attributes['directors'];
          $movie->actor = $attributes['actor'];
          $movie->time = $attributes['time'];
          $movie->date = $attributes['date'];
          $movie->url_picture = $attributes['url_picture'];
          $movie->url_link = $attributes['url_link'];
          $movie->view = $attributes['view'];
          $movie->description = $attributes['description'];
          $movie->status = $attributes['status'];
          $movie->film_hot = $attributes['film_hot'];
          $movie->contries_id = $attributes['contries_id'];
          $movie->categories_id = $attributes['categories_id'];
          $movie->type_movie = $attributes['type_movie'];
          $movie->year = $attributes['year'];
          return $movie->save();
    }
    public function header(){
        return Menu::all();
    }
    public function footerMovies(){
        return  Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
    }
    public function footerCategory(){
        return Category::all();
    }
    public function footerNew(){
        return Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
    }
    public function detail($id){
        $cate = Category::select('*')->inRandomOrder()->offset(4)->limit(3)->get();
        $detail = Movie::find($id);
        $sameCategory = Movie::where('categories_id',$detail->categories_id)->inRandomOrder()->limit(4)->get();
        return view('user.detail.detail')->with([
            'cate'=>$cate,
            'detail' =>$detail,
            'sameCategory'=>$sameCategory,
            'menu'=>$this->header(),
            'movies'=>$this->footerMovies(),
            'category'=>$this->footerCategory(),
            'new'=>$this->footerNew(),
            ]);
    }
    public function watch($id){
         $watch = Movie::find($id);
         $sameCategory = Movie::where('categories_id',$watch->categories_id)->limit(4)->get();
         $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
         return view('user.detail.watch')->with([
             'category'=>$this->footerCategory(),
             'menu'=>$this->header(),
             'movies' =>$this->footerMovies(),
             'view'=>$view,
             'watch' =>$watch,
             'sameCategory'=>$sameCategory,
            'new'=>$this->footerNew(),
             ]);
    }
    
}