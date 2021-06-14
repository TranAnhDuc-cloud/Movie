<?php

use App\Series_movie;
use Illuminate\Database\Seeder;

class Series_MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Series_movie::class,4)->create();
        Series_movie::create([
            'name'=> 'Phim Bộ 2019',
            'year' => '2019'
        ]);
        Series_movie::create([
            'name'=> 'Phim Bộ 2020',
            'year' => '2020'
        ]);
        Series_movie::create([
            'name'=> 'Phim Bộ 2021',
            'year' => '2021'
        ]);
        Series_movie::create([
            'name'=> 'Phim Bộ 2022',
            'year' => '2022'
        ]);
    }
}
