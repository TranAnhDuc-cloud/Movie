<?php

use App\Single_movie;
use Illuminate\Database\Seeder;

class Single_MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Single_movie::class,4)->create();
        Single_movie::create([
            'name'=> 'Phim Lẻ 2019',
            'year' => '2019'
        ]);
        Single_movie::create([
            'name'=> 'Phim Lẻ 2020',
            'year' => '2020'
        ]);
        Single_movie::create([
            'name'=> 'Phim Lẻ 2021',
            'year' => '2021'
        ]);
        Single_movie::create([
            'name'=> 'Phim Lẻ 2022',
            'year' => '2022'
        ]);
    }
}
