<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::updateOrCreate([
            'name' => 'superadmin'
        ], [
            'phone_number' => null,
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'role' => 'superadmin'
        ]);

        User::updateOrCreate([
            'name' => 'user'
        ], [
            'phone_number' => null,
            'email' => 'user@gmail.com',
            'password' => bcrypt('user1234'),
            'role' => 'user'
        ]);
    }
}
