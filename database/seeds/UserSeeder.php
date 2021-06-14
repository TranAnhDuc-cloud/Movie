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
        $available_avatars =  ['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png'];
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
            'avatar' => $available_avatars[array_rand($available_avatars)],
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
            'avatar' => $available_avatars[array_rand($available_avatars)],
            'remember_token' => Str::random(10),
        ]);
    }
}
