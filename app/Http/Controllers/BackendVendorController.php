<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class BackendVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendor = Vendor::all();
        return view('backend.vendor.index', ['vendor' => $vendor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:vendor,nama',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email',
        ]);

        $vendor = new Vendor;
        $vendor->nama = $request->nama;
        $vendor->alamat = $request->alamat;
        $vendor->telepon = $request->telepon;
        $vendor->email = $request->email;
        $vendor->save();
        return redirect('/administrator/vendor')->with('status', 'Data vendor berhasil ditambahkan!');

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendor = Vendor::find($id);
        return view('backend.vendor.edit', ['vendor' => $vendor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|unique:vendor,nama,' . $id,
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email',
        ]);
        $vendor = Vendor::find($id);
        $vendor->nama = $request->nama;
        $vendor->alamat = $request->alamat;
        $vendor->telepon = $request->telepon;
        $vendor->email = $request->email;
        $vendor->save();
        return redirect('/administrator/vendor')->with('status', 'Data vendor berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect('/administrator/vendor')->with('status', 'Data vendor berhasil dihapus!');
    }
}
