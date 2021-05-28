<?php

namespace App;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'title', 'directors', 'actor','time', 'date', 'url_picture','url_link', 'view', 'description','status', 'film_hot','contries_id','categories_id','year','type_movie','name',
    ];
    public $timestamp = false;

    public function contry(){
        return $this->belongsTo(Contry::class,'contries_id');
    }
    public  function category(){
        return $this->belongsTo(Category::class,'categories_id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,'Tags_movies');
    }
}
