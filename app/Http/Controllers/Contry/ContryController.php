<?php

namespace App\Http\Controllers\Contry;

use App\Category;
use App\Contry;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pages($id){
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
