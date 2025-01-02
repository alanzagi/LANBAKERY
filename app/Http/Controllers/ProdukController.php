<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function showProduk()
    {
        return view('produk', [
            'title' => 'Produk'
        ]);
    }
}
