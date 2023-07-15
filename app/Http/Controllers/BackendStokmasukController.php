<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Vendor;
use App\Models\Stokmasuk;
use Illuminate\Http\Request;

class BackendStokmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stokmasuk = new Stokmasuk;
        return view('backend.stokmasuk.index', ['stokmasuk' => $stokmasuk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendor = Vendor::all();
        $produk = Produk::all();
        return view('backend.stokmasuk.create', ['vendor' => $vendor, 'produk' => $produk]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vendor_id' => 'required',
            'produk_id' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'harga' => 'required',
        ]);

        $stokmasuk = new Stokmasuk;
        $stokmasuk->vendor_id = $request->vendor_id;
        $stokmasuk->produk_id = $request->produk_id;
        $stokmasuk->jumlah = $request->jumlah;
        $stokmasuk->harga = $request->harga;
        $stokmasuk->tanggal = $request->tanggal;
        $stokmasuk->save();
        // tambah stok produk
        $produk = Produk::find($request->produk_id);
        $produk->stok = $produk->stok + $request->jumlah;
        $produk->save();
        return redirect('/administrator/stokmasuk')->with('status', 'Data stok masuk berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stokmasuk = Stokmasuk::find($id);
        $vendor = Vendor::all();
        $produk = Produk::all();
        return view('backend.stokmasuk.edit', ['stokmasuk' => $stokmasuk, 'vendor' => $vendor, 'produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'vendor_id' => 'required',
            'produk_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
        ]);

        $stokmasuk = Stokmasuk::find($id);
        // edit stok produk
        $produk = Produk::find($request->produk_id);
        $produk->stok = $produk->stok - $stokmasuk->jumlah + $request->jumlah;
        $produk->save();
        $stokmasuk->vendor_id = $request->vendor_id;
        $stokmasuk->produk_id = $request->produk_id;
        $stokmasuk->jumlah = $request->jumlah;
        $stokmasuk->harga = $request->harga;
        $stokmasuk->tanggal = $request->tanggal;
        $stokmasuk->save();
        return redirect('/administrator/stokmasuk')->with('status', 'Data stok masuk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stokmasuk = Stokmasuk::find($id);
        // kurang stok produk
        $produk = Produk::find($stokmasuk->produk_id);
        $produk->stok = $produk->stok - $stokmasuk->jumlah;
        $produk->save();
        $stokmasuk->delete();
        return redirect('/administrator/stokmasuk')->with('status', 'Data stok masuk berhasil dihapus!');
    }
}
