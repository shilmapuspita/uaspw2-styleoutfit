<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stokmasuk extends Model
{
    use HasFactory;
    protected $table = 'stokmasuk';
    protected $fillable = [
        'produk_id',
        'vendor_id',
        'jumlah',
        'harga',
        'tanggal',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function getAllData()
    {
        $alldata = DB::table('stokmasuk')
            ->join('produk', 'stokmasuk.produk_id', '=', 'produk.id')
            ->join('vendor', 'stokmasuk.vendor_id', '=', 'vendor.id')
            ->select('stokmasuk.*','produk.nama AS nama_produk', 'vendor.nama AS nama_vendor')->get();
        return $alldata;
    }
}
