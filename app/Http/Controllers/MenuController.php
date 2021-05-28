<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contry;
use App\Http\Controllers\HomeController;
use App\Menu;
use App\Movie;
use App\Single_movie;
use App\Type_movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class MenuController  extends Controller 
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
}
