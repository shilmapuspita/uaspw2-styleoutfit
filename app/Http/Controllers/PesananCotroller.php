<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananCotroller extends Controller
{
    public function pesanan(Request $request)
    {
        $total = $request->harga * $request->qty;
        Pesanan::create([
            'tanggal' => date('Y-m-d'),
            'user_id' => $request->user_id,
            'produk_id' => $request->produk_id,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'total' => $total,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/pesanan');
    }
    public function index()
    {
        if (Auth::check()) {
            $kaategori = Kategori::all();
            $pesanan = Pesanan::where('user_id', auth()->user()->id)->get();
            return view('frontend.pesanan.index', [
                'pesanan' => $pesanan,
                'kategori' => $kaategori
            ]);
        }
        return redirect('/login');
    }
}
