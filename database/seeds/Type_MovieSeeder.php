<?php

use App\Type_movie;
use Illuminate\Database\Seeder;

class Type_MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Type_movie::class,3)->create();
        Type_movie::create([
            'name'=> 'Phim Lẻ',
            'handle' => 'single_movies'
        ]);
        Type_movie::create([
            'name'=> 'Phim Bộ',
            'handle' => 'series_movies'
        ]);
        Type_movie::create([
            'name'=> 'Phim Chiếu Rạp',
            'handle' => 'theater_movies'
        ]);
    }
}
