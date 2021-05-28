<?php

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
        factory(App\Series_movie::class,4)->create();
    }
}
