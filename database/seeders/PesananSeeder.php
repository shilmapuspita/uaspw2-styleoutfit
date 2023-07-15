<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        Pesanan::create([
            'tanggal' => now(),
            'user_id' => $users->random()->id,
            'alamat' => 'Jl. Sudirman No. 123, Jakarta',
            'telepon' => '0812345678',
            'produk_id' => 1,
            'total' => 200000,
            'keterangan' => 'Pesanan pertama',
        ]);

        Pesanan::create([
            'tanggal' => now(),
            'user_id' => $users->random()->id,
            'alamat' => 'Jl. Gatot Subroto No. 456, Tangerang',
            'telepon' => '0823456789',
            'produk_id' => 3,
            'total' => 150000,
            'keterangan' => 'Pesanan kedua',
        ]);

        Pesanan::create([
            'tanggal' => now(),
            'user_id' => $users->random()->id,
            'alamat' => 'Jl. Raya Bekasi No. 789, Bekasi',
            'telepon' => '0834567890',
            'produk_id' => 2,
            'total' => 300000,
            'keterangan' => 'Pesanan ketiga',
        ]);

        Pesanan::create([
            'tanggal' => now(),
            'user_id' => $users->random()->id,
            'alamat' => 'Jl. Kemang Raya No. 10, Jakarta Selatan',
            'telepon' => '0876543210',
            'produk_id' => 5,
            'total' => 250000,
            'keterangan' => 'Pesanan keempat',
        ]);

        Pesanan::create([
            'tanggal' => now(),
            'user_id' => $users->random()->id,
            'alamat' => 'Jl. Merdeka No. 100, Depok',
            'telepon' => '0898765432',
            'produk_id' => 4,
            'total' => 180000,
            'keterangan' => 'Pesanan kelima',
        ]);
    }
}
