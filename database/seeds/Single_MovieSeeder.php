<?php

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
        factory(App\Single_movie::class,4)->create();
    }
}
