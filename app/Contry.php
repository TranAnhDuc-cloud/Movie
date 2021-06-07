<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contry extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
         'name', 'description',
    ];
    public $timestamp = false;

    public function movies(){
        return $this->hasMany(Movie::class,'contries_id');
    }
}
