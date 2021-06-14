<?php

use App\Theater_movie;
use Illuminate\Database\Seeder;

class Theater_MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Theater_movie::class,4)->create();
        Theater_movie::create([
            'name'=> 'Phim Chiếu Rạp 2019',
            'year' => '2019'
        ]);
        Theater_movie::create([
            'name'=> 'Phim Chiếu Rạp 2020',
            'year' => '2020'
        ]);
        Theater_movie::create([
            'name'=> 'Phim Chiếu Rạp 2021',
            'year' => '2021'
        ]);
        Theater_movie::create([
            'name'=> 'Phim Chiếu Rạp 2022',
            'year' => '2022'
        ]);
    }
}
