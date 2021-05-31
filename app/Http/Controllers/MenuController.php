<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contry;
use App\Menu;
use App\Movie;
use App\Type_movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class MenuController  extends BaseController 
{
    public function index($pages,$id,$name){
        $menu = Menu::all();
        foreach($menu as $item){
            $item->name;
            if ($pages === 'Thể Loại') {
                return redirect()->route('category.index',[$id,$name]);
            }else{
                if($pages === 'Quốc Gia'){
                    return redirect()->route('contry.index',[$id,$name]);
                }else{
                    if($pages === 'Phim Lẻ'){
                        return redirect()->route('single.index',[$name,$id]);
                    }
                    else{
                        if($pages === 'Phim Bộ'){
                            return redirect()->route('series.index',[$name,$id]);
                        }else{
                            if($pages === 'Phim Chiếu Rạp'){
                                return redirect()->route('theater.index',[$name,$id]);
                            }
                        }
                    }
                }
            }
        
        }
    }
    public function category($id){
        $cate = Category::find($id);
        View::share('key', $cate);
        $theloai = Movie::where('categories_id',$id)->paginate(9);
        return view('user.pages.category')->with([
            'category'=>BaseController::footerCategory(),
            'film_hot'=>BaseController::phimNoiBat(),
            'film_hot1'=>BaseController::phimNoiBat1(),
            'menu'=>BaseController::menu(),
            'new'=>BaseController::phimMoiNhat(),
            'movies'=>BaseController::footerMovies(),
            'view'=>BaseController::topXemNhieu(),
            'theloai'=>$theloai,
            'cate'=>$cate,
        ]);
    }
    
    public function country($id){
        $contry = Movie::where('contries_id',$id)->paginate(10);
        $nameContry = Contry::find($id);
        View::share('nameContry', $nameContry);
        return view('user.pages.contry')->with([
            'category'=>BaseController::footerCategory(),
            'movies'=>BaseController::footerMovies(),
            'film_hot'=>BaseController::phimNoiBat(),
            'film_hot1'=>BaseController::phimNoiBat1(),
            'menu'=>BaseController::menu(),
            'view'=>BaseController::topXemNhieu(),
            'contry'=>$contry,
            'new'=>BaseController::phimMoiNhat(),
        ]);
    }

    public function typeMovies($name){
        $allTypes = Type_movie::all();
        foreach($allTypes as $item){
            $handle = $item->handle;
            $memi = DB::table($handle)->where('name',$name)->get();
                foreach ($memi as $row){
                    $typeMovies = Movie::where('year',$row->year)->where('type_movie',$item->id)->paginate(10);
                }
        }
        $typeMovie = $typeMovies;
        $titleMovies = $name;
        View::share('titleMovies', $titleMovies);
        return view('user.pages.type_movies')->with([
            'category'=>BaseController::footerCategory(),
            'film_hot'=>BaseController::phimNoiBat(),
            'film_hot1'=>BaseController::phimNoiBat1(),
            'menu'=>BaseController::menu(),
            'view'=>BaseController::topXemNhieu(),
            'movies'=>BaseController::footerMovies(),
            'typeMovies'=>$typeMovie,
            'new'=>BaseController::phimMoiNhat(),
        ]);
    }
}
