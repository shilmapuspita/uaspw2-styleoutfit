<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BackendDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkterbaru = Produk::orderBy('created_at', 'desc')->take(5)->get();
        $pesananterbaru = Pesanan::orderBy('created_at', 'desc')->take(5)->get();
        $totalpesananhariini = Pesanan::whereDate('created_at', date('Y-m-d'))->count();
        $totalproduk = Produk::count();
        $totalkategori = Kategori::count();
        $totaluser = User::count();
        return view(
            'backend.dashboard',
            [
                'produkterbaru' => $produkterbaru,
                'pesananterbaru' => $pesananterbaru,
                'totalpesananhariini' => $totalpesananhariini, 
                'totalproduk' => $totalproduk, 
                'totalkategori' => $totalkategori, 
                'totaluser' => $totaluser
            ]
        );
    }
}
