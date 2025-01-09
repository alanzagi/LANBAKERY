<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends  Controller
{
    public function showProduk()
    {
        $produk = Produk::all();

        return view('produk', [
            'title' => 'Produk',
            'produk' => $produk
        ]);
    }
}
