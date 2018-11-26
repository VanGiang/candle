<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Giang',
            'email' => 'giang@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'admin' => 1,
            'approved_at' => now(),
        ]);
    }
}
