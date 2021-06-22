<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use App\Tag;
use Illuminate\Http\Request;

class PagesController extends BaseController
{
    //
    public function detail($id){
        $cate = Category::select('*')->inRandomOrder()->offset(4)->limit(3)->get();
        $detail = Movie::find($id);
        $sameCategory = Movie::where('categories_id',$detail->categories_id)->inRandomOrder()->get();
        return view('user.detail.detail')->with([
            'cate'=>$cate,
            'detail' =>$detail,
            'sameCategory'=>$sameCategory,
        ]);
    }

    public function watch($id){
        $watch = Movie::find($id);
        $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
        $sameCategory = Movie::where('categories_id',$watch->categories_id)->inRandomOrder()->get();
        return view('user.detail.watch')->with([
            'view'=>$view,
            'watch' =>$watch,
            'sameCategory'=>$sameCategory,
        ]);
    }

    public function tags($id){
        $tagTitle = Tag::find($id);
        $tag = $tagTitle->movies()->where('tags_id',$id )->inRandomOrder()->paginate(12);
        return view('user.pages.tag')->with([
            'tag'=>$tag,
            'tagTitle' =>$tagTitle,
        ]);
    }
}
