<?php

use Illuminate\Database\Seeder;

class Tag_MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Tags_movies::class,30)->create();
    }
}
