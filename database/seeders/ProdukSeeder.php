<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'kode' => 'PROD001',
            'nama' => 'Blouse Wanita',
            'kategori_id' => 1,
            'harga' => 150000,
            'stok' => 10,
            'deskripsi' => 'Blouse wanita dengan desain modis dan nyaman dipakai.',
            'foto' => 'blouse-wanita.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD002',
            'nama' => 'Dress Wanita',
            'kategori_id' => 1,
            'harga' => 200000,
            'stok' => 8,
            'deskripsi' => 'Dress wanita dengan motif cantik dan elegan.',
            'foto' => 'dress-wanita.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD003',
            'nama' => 'Rok Wanita',
            'kategori_id' => 1,
            'harga' => 120000,
            'stok' => 12,
            'deskripsi' => 'Rok wanita dengan berbagai pilihan model.',
            'foto' => 'rok-wanita.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD004',
            'nama' => 'Celana Panjang Pria',
            'kategori_id' => 2,
            'harga' => 180000,
            'stok' => 15,
            'deskripsi' => 'Celana panjang pria dengan bahan nyaman dan berkualitas.',
            'foto' => 'celana-panjang-pria.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD005',
            'nama' => 'Kemeja Pria',
            'kategori_id' => 2,
            'harga' => 200000,
            'stok' => 10,
            'deskripsi' => 'Kemeja pria dengan desain klasik dan berkualitas tinggi.',
            'foto' => 'kemeja-pria.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD006',
            'nama' => 'Gelang Emas',
            'kategori_id' => 3,
            'harga' => 500000,
            'stok' => 20,
            'deskripsi' => 'Gelang emas dengan desain elegan dan mewah.',
            'foto' => 'gelang-emas.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD007',
            'nama' => 'Kalung Perak',
            'kategori_id' => 3,
            'harga' => 250000,
            'stok' => 18,
            'deskripsi' => 'Kalung perak dengan tampilan modern dan stylish.',
            'foto' => 'kalung-perak.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD008',
            'nama' => 'Sepatu Sneakers',
            'kategori_id' => 3,
            'harga' => 300000,
            'stok' => 10,
            'deskripsi' => 'Sepatu sneakers dengan desain trendi dan nyaman dipakai.',
            'foto' => 'sepatu-sneakers.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD009',
            'nama' => 'Sepatu Boots',
            'kategori_id' => 3,
            'harga' => 350000,
            'stok' => 8,
            'deskripsi' => 'Sepatu boots dengan desain klasik dan bahan berkualitas.',
            'foto' => 'sepatu-boots.jpg',
        ]);

        Produk::create([
            'kode' => 'PROD010',
            'nama' => 'Tas Tote',
            'kategori_id' => 5,
            'harga' => 200000,
            'stok' => 15,
            'deskripsi' => 'Tas tote dengan ukuran yang cukup besar dan nyaman digunakan.',
            'foto' => 'tas-tote.jpg',
        ]);
    }
}
