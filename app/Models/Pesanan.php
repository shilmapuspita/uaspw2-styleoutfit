<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'tanggal',
        'user_id',
        'alamat',
        'telepon',
        'produk_id',
        'total',
        'keterangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
    public function getAllData()
    {
        $alldata = DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
        ->join('users', 'pesanan.user_id', '=', 'users.id')
        ->select('pesanan.*', 'produk.nama AS nama_produk', 'users.name AS nama_user')->get();
        return $alldata;
    }
}
