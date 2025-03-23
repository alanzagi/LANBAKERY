<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Session;

class KeranjangController extends Controller
{
    public function showKeranjang()
    {
        $keranjang = session()->get('keranjang', []);
        return view('keranjang', [
            'title' => 'Keranjang Belanja',
            'keranjang' => $keranjang
        ]);
    }

    public function addKeranjang(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $keranjang = Session::get('keranjang', []);

        if (isset($keranjang[$id])) {
            $keranjang[$id]['quantity']++;
        } else {
            $keranjang[$id] = [
                "gambar" => $produk->gambar,
                "nama" => $produk->nama,
                "harga" => $produk->harga,
                "quantity" => 1
            ];
        }

        Session::put('keranjang', $keranjang);
        return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
    }

    public function deleteKeranjang($id)
    {
        $keranjang = Session::get('keranjang', []);

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            Session::put('keranjang', $keranjang);
        }

        return redirect()->back()->with('success', 'Produk dihapus dari keranjang!');
    }
}
