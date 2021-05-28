<?php

use Illuminate\Database\Seeder;

class Category_TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Categories_tags::class,30)->create();
    }
}
