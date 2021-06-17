<?php

use App\Category;
use App\Menu;
use App\Movie;
use App\User;
use Carbon\Carbon;

function getJoinTimeUser($id){
       $member = User::findOrFail($id);
       $a = Carbon::now()->year;
       $b  =  $member->created_at->year;
       $result = $a - $b;
       if($result != 0){    
        return $result.trans('admin.year');
       }else{
            $a = Carbon::now()->month;
            $b  =  $member->created_at->month;
            $result = $a - $b;
            if($result !=0){
                return $result.trans('admin.month');
            }else{
                $a = Carbon::now()->day;
                $b  =  $member->created_at->day;
                $result = $a - $b;
                if($result !=0){
                    return $result.trans('admin.day');
                }else{
                    $a = Carbon::now()->hour;
                    $b  =  $member->created_at->hour;
                    $result = $a - $b;
                    if($result !=0){
                        return $result.trans('admin.hour');
                    }
                }
            }
       }
}

function number($i){
    return $i;
}
