<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Menu::class,5)->create();
        Menu::create([
            'name'=> 'Thể Loại',
            'handle' => 'categories'
        ]);
        Menu::create([
            'name'=> 'Quốc Gia',
            'handle' => 'contries'
        ]);
        Menu::create([
            'name'=> 'Phim Lẻ',
            'handle' => 'single_movies'
        ]);
        Menu::create([
            'name'=> 'Phim Bộ',
            'handle' => 'series_movies'
        ]);
        Menu::create([
            'name'=> 'Phim Chiếu Rạp',
            'handle' => 'theater_movies'
        ]);
    }
}
