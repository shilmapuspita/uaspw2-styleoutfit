<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'Pakaian Wanita',
        ]);

        Kategori::create([
            'nama' => 'Pakaian Pria',
        ]);

        Kategori::create([
            'nama' => 'Aksesoris',
        ]);

        Kategori::create([
            'nama' => 'Sepatu',
        ]);

        Kategori::create([
            'nama' => 'Tas',
        ]);
    }
}
