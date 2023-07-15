<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Produk::all();
        $kategori = Kategori::all();
        return view('frontend.produk.index', [
            'products' => $products,
            'kategori' => $kategori
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kode)
    {
        $product = Produk::where('kode', $kode)->first();
        $kategori = Kategori::all();
        $products = Produk::where('kategori_id', $product->kategori_id)->inRandomOrder()->take(4)->get();
        return view('frontend.produk.show', [
            'product' => $product,
            'kategori' => $kategori,
            'products' => $products
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function kategori(string $id)
    {
        $products = Produk::where('kategori_id', $id)->get();
        $kategori = Kategori::all();
        $kat = Kategori::find($id);
        return view('frontend.produk.kategori', [
            'products' => $products,
            'kategori' => $kategori,
            'kat' => $kat
        ]);
    }
}
