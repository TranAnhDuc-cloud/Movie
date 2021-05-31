<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\SingleMovieRepositoryInterface;
use App\Single_movie;
use Illuminate\Http\Request;

class SingleMovieController extends Controller
{
    protected $SingleMovieRepository;

    public function __construct(SingleMovieRepositoryInterface $SingleMovieRepository){
        $this->SingleMovieRepository = $SingleMovieRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->SingleMovieRepository->getAll();
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
     * @param  \App\Single_movie  $single_movie
     * @return \Illuminate\Http\Response
     */
    public function show(Single_movie $single_movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Single_movie  $single_movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Single_movie $single_movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Single_movie  $single_movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Single_movie $single_movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Single_movie  $single_movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Single_movie $single_movie)
    {
        //
    }
}
