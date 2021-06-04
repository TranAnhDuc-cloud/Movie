<?php

namespace App\Services;

class uploadFileService{

    public static function handleImg($image,$name){
        if(!is_null($image)){
           $image ->move('img/news',$name);
        }
    }
    public static function handleVideo($video,$name){
        if (!is_null($video)) {
            $video->move('video',$name);
        }
    }
}