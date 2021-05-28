<?php

namespace App\Http\Controllers\Contry;

use App\Category;
use App\Contry;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pages($id){
        // Film Hot
        $film_hot = Movie::where('film_hot','=',1)->limit(4)->get();
        $film_hot1 = Movie::where('view','>',200)->limit(1)->get();
        // MENU
        $menu = Menu::all();
        // Category
        $category = Category::all();
        // View
        $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
        // Movies
        $movies = Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
        // movie on the loai;
        $contry = Movie::where('contries_id',$id)->paginate(10);
        $nameContry = Contry::find($id);
        $new = Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
        View::share('nameContry', $nameContry);
        return view('user.pages.contry')->with([
            'category'=>$category,
            'film_hot'=>$film_hot,
            'film_hot1'=>$film_hot1,
            'menu'=>$menu,
            'view'=>$view,
            'movies'=>$movies,
            'contry'=>$contry,
            'new'=>$new,
        ]);
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
