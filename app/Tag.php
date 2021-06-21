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
        return $this->belongsToMany(Category::class,'categories_tags');
    }
    
    public function movies(){
        return $this->belongsToMany(Movie::class,'tags_movies','tags_id','movies_id');
    }
}
