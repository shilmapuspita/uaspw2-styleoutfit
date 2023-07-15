<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendProdukController;
use App\Http\Controllers\BackendVendorController;
use App\Http\Controllers\BackendPesananController;
use App\Http\Controllers\BackendKategoriController;
use App\Http\Controllers\BackendDashboardController;
use App\Http\Controllers\BackendStokmasukController;
use App\Http\Controllers\BackendUserController;
use App\Http\Controllers\LandingCotroller;
use App\Http\Controllers\PesananCotroller;
use App\Http\Controllers\ProdukCotroller;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingCotroller::class, 'index']);
Route::get('/produk', [ProdukCotroller::class, 'index']);
Route::get('/produk/{kode}', [ProdukCotroller::class, 'show']);
Route::get('/produk/{id}/kategori', [ProdukCotroller::class, 'kategori']);
Route::post('/pesanan', [PesananCotroller::class, 'pesanan']);
Route::get('/pesanan', [PesananCotroller::class, 'index']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login', [AuthController::class, 'loginpost']);
Route::get('signup', [AuthController::class, 'signup'])->name('signup');
Route::post('signup', [AuthController::class, 'signuppost']);
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('administrator')->group(function () {
        Route::get('/', [BackendDashboardController::class, 'index']);
        Route::resource('kategori', BackendKategoriController::class);
        Route::resource('produk', BackendProdukController::class);
        Route::resource('vendor', BackendVendorController::class);
        Route::resource('stokmasuk', BackendStokmasukController::class);
        Route::resource('pesanan', BackendPesananController::class);
        Route::resource('users', BackendUserController::class);
    });
});
