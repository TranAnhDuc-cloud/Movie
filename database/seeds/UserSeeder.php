<?php

use App\User;
use Illuminate\Database\Seeder;

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
            'email_verified_at' => now(),
            'password' => bcrypt('1'),
            'level'=>0,
            'remember_token' => rand(1,10),
        ]);
        User::create([
            'username' => 'admin',
            'fullname' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1'),
            'level'=>1,
            'remember_token' => rand(1,10),
        ]);
    }
}
