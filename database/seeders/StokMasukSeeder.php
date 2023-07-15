<?php

namespace Database\Seeders;

use App\Models\Stokmasuk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StokMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stokmasuk::create([
            'produk_id' => 1,
            'vendor_id' => 1,
            'jumlah' => 10,
            'harga' => 10000,
            'tanggal' => '2023-06-28',
        ]);

        Stokmasuk::create([
            'produk_id' => 2,
            'vendor_id' => 2,
            'jumlah' => 15,
            'harga' => 15000,
            'tanggal' => '2023-06-28',
        ]);

        Stokmasuk::create([
            'produk_id' => 3,
            'vendor_id' => 3,
            'jumlah' => 20,
            'harga' => 20000,
            'tanggal' => '2023-06-28',
        ]);

        Stokmasuk::create([
            'produk_id' => 4,
            'vendor_id' => 2,
            'jumlah' => 25,
            'harga' => 25000,
            'tanggal' => '2023-06-28',
        ]);

        Stokmasuk::create([
            'produk_id' => 5,
            'vendor_id' => 3,
            'jumlah' => 30,
            'harga' => 30000,
            'tanggal' => '2023-06-28',
        ]);
    }
}
