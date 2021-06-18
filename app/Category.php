<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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

    public function getMovie6($cate){
        return Category::find($cate)->movies()->inRandomOrder()->offset(1)->limit(6)->orderby('created_at','Desc')->get();
    }

    public function getMovie1($cate){
        return Category::find($cate)->movies()->inRandomOrder()->limit(1)->orderby('created_at','Desc')->get();
    }
}
