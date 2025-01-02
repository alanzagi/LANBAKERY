<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\DisclaimerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'showBeranda'])->name('beranda');
Route::get('/produk', [ProdukController::class, 'showProduk'])->name('produk');
Route::get('/berita', [BeritaController::class, 'showBerita'])->name('berita');
Route::get('/toko', [TokoController::class, 'showToko'])->name('toko');
Route::get('/kontak', [KontakController::class, 'showKontak'])->name('kontak');
Route::get('/keranjang', [KeranjangController::class, 'showKeranjang'])->name('keranjang');
Route::get('/disclaimer', [DisclaimerController::class, 'showDisclaimer'])->name('disclaimer');
