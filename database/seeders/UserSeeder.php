<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'no_hp' => '08767766772',
                'password' => Hash::make('12345678'),
                'email_verified_at' => now(),
                'roles' => 'admin',
                'status' => 'aktif',
            ],
            // [
            //     'name' => 'User',
            //     'email' => 'user@gmail.com',
            //     'no_hp' => '0876776632',
            //     'password' => Hash::make('12345678'),
            //     'roles' => 'user',
            // ],
        ])->each(function ($users) {
            User::create($users);
        });
    }
}
