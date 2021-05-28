<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //1 category có nhieuf movie
    protected $fillable = [
         'description', 'url_picture','name',
    ];
    public $timestamp = false;

    // Lấy tất cả các movie của category
    public function movies(){
        return $this->hasMany(Movie::class,'categories_id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,'Categories_tags');
    }
}
