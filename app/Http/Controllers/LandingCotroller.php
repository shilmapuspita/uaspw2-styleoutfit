<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingCotroller extends Controller
{
    public function index()
    {
        $populer = Produk::inRandomOrder()->take(4)->get();
        $flashsell = Produk::where('kategori_id', 5)->inRandomOrder()->first();
        $promo = Produk::inRandomOrder()->take(4)->get();
        $terbaru = Produk::orderBy('created_at', 'desc')->take(4)->get();
        $kategori = Kategori::all();
        return view('frontend.index', [
            'populer' => $populer,
            'flashsell' => $flashsell,
            'promo' => $promo,
            'terbaru' => $terbaru,
            'kategori' => $kategori
        ]);
    }
}
