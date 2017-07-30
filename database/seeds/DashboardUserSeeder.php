<?php

use App\User;
use Illuminate\Database\Seeder;

class DashboardUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'dashboard user',
            'email' => env('BASIC_AUTH_USERNAME'),
            'password' => bcrypt(env('BASIC_AUTH_PASSWORD')),
        ]);
    }
}
