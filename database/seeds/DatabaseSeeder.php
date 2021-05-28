<?php

use App\Menu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ContrySeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            MovieSeeder::class,
            Category_TagSeeder::class,
            Tag_MovieSeeder::class,
            MenuSeeder::class,
            Single_MovieSeeder::class,
            Series_MovieSeeder::class,
            Theater_MovieSeeder::class,
            Type_MovieSeeder::class,
        ]);
    }
}
