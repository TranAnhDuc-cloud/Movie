<?php

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
        factory(App\Theater_movie::class,4)->create();
    }
}
