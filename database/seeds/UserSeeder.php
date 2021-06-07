<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class,10)->create();
        User::create([
            'username' => 'anhduc',
            'fullname' => 'anhduc',
            'email' => 'anhduc@gmail.com',
            'email_verified' => null,
            'password' => bcrypt('1'),
            'level'=>0,
            'active' =>1,
            'provider' =>null,
            'provider_id'=>null,
            'address'=>null,
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'username' => 'admin',
            'fullname' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified' => null,
            'password' => bcrypt('1'),
            'level'=>1,
            'active' =>1,
            'provider' =>null,
            'provider_id'=>null,
            'address'=>null,
            'remember_token' => Str::random(10),
        ]);
    }
}
