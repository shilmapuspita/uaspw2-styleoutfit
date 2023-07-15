<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class BackendProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = new Produk;
        return view('backend.produk.index', ['produk' => $produk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('backend.produk.create', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:produk,kode',
            'nama' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->kategori_id = $request->kategori_id;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->foto = $request->foto;
        $produk->save();
        return redirect('/administrator/produk')->with('status', 'Data produk berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        return view('backend.produk.edit', ['produk' => $produk, 'kategori' => $kategori]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('backend.produk.show', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required|unique:produk,kode,' . $id,
            'nama' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);
        $produk = Produk::find($id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->kategori_id = $request->kategori_id;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->foto = $request->foto;
        $produk->save();
        return redirect('/administrator/produk')->with('status', 'Data produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/administrator/produk')->with('status', 'Data produk berhasil dihapus!');
    }
}
