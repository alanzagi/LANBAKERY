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
Route::post('/keranjang/add/{id}', [KeranjangController::class, 'addKeranjang'])->name('keranjang.add');
Route::get('/keranjang/delete/{id}', [KeranjangController::class, 'deleteKeranjang'])->name('keranjang.delete');
Route::post('/keranjang/update/', [KeranjangController::class, 'updateKeranjang'])->name('keranjang.update');
Route::post('/keranjang/data-diri', [KeranjangController::class, 'dataDiri'])->name('keranjang.data_diri');

Route::get('/disclaimer', [DisclaimerController::class, 'showDisclaimer'])->name('disclaimer');
