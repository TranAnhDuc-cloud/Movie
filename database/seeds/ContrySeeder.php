<?php

use Illuminate\Database\Seeder;

class ContrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Contry::class,10)->create();
    }
}
