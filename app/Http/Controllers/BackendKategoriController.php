<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class BackendKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('backend.kategori.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kategori,nama',
        ]);
        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('/administrator/kategori')->with('status', 'Data kategori berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kat = Kategori::find($id);
        return view('backend.kategori.edit', ['kat' => $kat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|unique:kategori,nama,' . $id,
        ]);
        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('/administrator/kategori')->with('status', 'Data kategori berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::destroy($id);
        return redirect('/administrator/kategori')->with('status', 'Data kategori berhasil dihapus!');
    }
}
