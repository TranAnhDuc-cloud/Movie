<?php
namespace App\Repository;

use App\Repository\EloquentRepository;
use App\Repository\Interfaces\TypeMovieRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class TypeMovieEloquentRepository extends EloquentRepository implements TypeMovieRepositoryInterface{
    public function getModel(){
        return \App\Type_movie::class;
    }

    public function getHandler($handle){
        return DB::table($handle)->whereNull('deleted_at');
    }

    public function findHandler($handle,$id){
        return $this->getwithTrashed($handle)->where('id',$id);
    }
    
    public function deleteSoft($handle,$id){
        $time = Carbon::now();
        return $this->findHandler($handle,$id)->update([
            'deleted_at' => $time,
        ]);
    }

    public function createHandler($handle,array $attributes){
        DB::table($handle)->insert([
            'name' =>$attributes['name'],    
            'year' =>$attributes['year'],
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
    }

    public function getonlyTrashed($handle){
        return $this->getwithTrashed($handle)->whereNotNull('deleted_at');
    }

    public function getwithTrashed($handle){
        return DB::table($handle);
    }

    public function restore($handle,$id){
        return $this->findHandler($handle,$id)->update([
            'deleted_at' => null,
        ]);
     }
 
     public function deleteHard($handle,$id){
         return $this->getonlyTrashed($handle)->where('id', $id)->delete();
     }
}