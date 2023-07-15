<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            'id' => 1,
            'nama' => 'Budi Susanto',
            'alamat' => 'Jl. Sudirman No. 123, Jakarta',
            'telepon' => '0812345678',
            'email' => 'budisusanto@gmail.com',
        ]);

        Vendor::create([
            'id' => 2,
            'nama' => 'Siti Rahayu',
            'alamat' => 'Jl. Gatot Subroto No. 456, Tangerang',
            'telepon' => '0823456789',
            'email' => 'sitirahayu@gmail.com',
        ]);

        Vendor::create([
            'id' => 3,
            'nama' => 'Agus Setiawan',
            'alamat' => 'Jl. Raya Bekasi No. 789, Bekasi',
            'telepon' => '0834567890',
            'email' => 'agussetiawan@gmail.com',
        ]);
    }
}
