<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contry extends Model
{
    //
    protected $fillable = [
         'name', 'description',
    ];
    public $timestamp = false;

    public function movies(){
        return $this->hasMany(Movie::class,'contries_id');
    }
}
