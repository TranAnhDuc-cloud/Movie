<?php

namespace App\Providers;

use App\Type_movie;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Arr;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(
            \App\Repository\Interfaces\MovieRepositoryInterface::class,
            \App\Repository\MovieEloquentRepository::class
            );
        $this->app->singleton(
            \App\Repository\Interfaces\CategoryRepositoryInterface::class,
            \App\Repository\CategoryEloquentRepository::class
            );  
        $this->app->singleton(
            \App\Repository\Interfaces\UserRepositoryInterface::class,
            \App\Repository\UserEloquentRepository::class
            ); 
        $this->app->singleton(
            \App\Repository\Interfaces\TypeMovieRepositoryInterface::class,
            \App\Repository\TypeMovieEloquentRepository::class
            ); 
        $this->app->singleton(
            \App\Repository\Interfaces\SingleMovieRepositoryInterface::class,
            \App\Repository\SingleMovieEloquentRepository::class
            ); 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //SHARE VIEW
        $shareType = Type_movie::all();
        View::share('shareType', $shareType);
        $nameShare = User::all();
        View::share('nameShare',$nameShare);
        // SEARCH
        Builder::macro('whereLike', function ($attributes, string $searchTerm) {
            $this->where(function (Builder $query) use ($attributes, $searchTerm) {
                foreach ( Arr::wrap($attributes) as $attribute) {
                    $query->when(
                        str_contains($attribute, '.'),
                        function (Builder $query) use ($attribute, $searchTerm) {
                            [$relationName, $relationAttribute] = explode('.', $attribute);
        
                            $query->orWhereHas($relationName, function (Builder $query) use ($relationAttribute, $searchTerm) {
                                $query->where($relationAttribute, 'LIKE', "%{$searchTerm}%");
                            });
                        },
                        function (Builder $query) use ($attribute, $searchTerm) {
                            $query->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
                        }
                    );
                }
            });
            return $this;
        });
    }
}
