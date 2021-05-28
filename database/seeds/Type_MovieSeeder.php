<?php

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
        factory(App\Type_movie::class,3)->create();
    }
}
