<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends  Controller
{
    public function showProduk(Request $request)
    {
        $query = Produk::query();

        if ($request->has('search') && $request->search) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        if ($request->has('sort') && $request->sort) {
            switch ($request->sort) {
                case 'nama_asc':
                    $query->orderBy('nama', 'asc');
                    break;
                case 'nama_desc':
                    $query->orderBy('nama', 'desc');
                    break;
                case 'harga_asc':
                    $query->orderBy('harga', 'asc');
                    break;
                case 'harga_desc':
                    $query->orderBy('harga', 'desc');
                    break;
            }
        }

        $produk = $query->get();

        return view('produk', [
            'title' => 'Produk',
            'produk' => $produk,
        ]);
    }
}
