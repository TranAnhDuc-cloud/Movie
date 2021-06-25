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
use App\Repository\Interfaces\MenuRepositoryInterface;


class MenuController  extends BaseController 
{
    
    public function index($pages,$id,$name){
        $menu = Menu::all();
        foreach($menu as $item){
            $item->name;
            if ($pages === 'Thể Loại') {
                return $this->category($id);
            }else{
                if($pages === 'Quốc Gia'){
                    return $this->country($id);
                }else{
                    if($pages === 'Phim Lẻ'){
                        return $this->typeMovies($name);
                    }
                    else{
                        if($pages === 'Phim Bộ'){
                            return $this->typeMovies($name);
                        }else{
                            if($pages === 'Phim Chiếu Rạp'){
                                return $this->typeMovies($name);
                            }
                        }
                    }
                }
            }
        
        }
    }

    public function category($id){
        $cate = Category::findOrFail($id);
        $theloai = Movie::where('categories_id',$id)->paginate(12);
        return view('user.pages.category')->with([
            'theloai'=>$theloai,
            'cate'=>$cate,
        ]);
    }
    
    public function country($id){
        $contry = Movie::where('contries_id',$id)->paginate(12);
        $nameContry = Contry::findOrFail($id);
        return view('user.pages.contry')->with([
            'contry'=>$contry,
            'nameContry' => $nameContry,
        ]);
    }

    public function typeMovies($name){
        $allTypes = Type_movie::all();
        foreach($allTypes as $item){
            $handle = $item->handle;
            $memi = DB::table($handle)->where('name',$name)->get();
            foreach ($memi as $row){
                $typeMovies = Movie::where('year',$row->year)->where('type_movie',$item->id)->paginate(12);
            }
        }
        $typeMovie = $typeMovies;
        $titleMovies = $name;
        return view('user.pages.type_movies')->with([
            'typeMovies'=>$typeMovie,
            'titleMovies'=>$titleMovies
        ]);
    }
}
