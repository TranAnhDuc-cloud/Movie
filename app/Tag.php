<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'url_picture',
    ];
    public $timestamp = false;

    public function category(){
        return $this->belongsToMany('App\Category','Categories_tags');
    }
    public function movie(){
        return $this->belongsToMany('App\Movie','Tags_movies');
    }
}
