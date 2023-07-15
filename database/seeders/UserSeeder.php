<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhamad Zein',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'manager',
            'email' => 'manager@admin.com',
            'password' => Hash::make('manager123'),
            'role' => 'general manager',
        ]);

        User::create([
            'name' => 'Siti Rahayu',
            'email' => 'sitirahayu@gmail.com',
            'password' => Hash::make('sitirahayu'),
            'role' => 'user',
        ]);
    }
}
