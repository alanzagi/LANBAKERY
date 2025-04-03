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

    public function updateKeranjang(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');

        // Ambil keranjang dari session
        $cart = session()->get('keranjang', []);

        // Pastikan item ada di keranjang
        if (isset($cart[$id])) {
            // Update quantity
            $cart[$id]['quantity'] = $quantity;

            // Simpan kembali ke session
            session()->put('cart', $cart);

            // Hitung harga baru untuk item
            $newPrice = $cart[$id]['harga'] * $quantity;

            // Hitung total harga keseluruhan
            $total = array_reduce($cart, function ($acc, $item) {
                return $acc + ($item['harga'] * $item['quantity']);
            }, 0);

            return response()->json([
                'newPrice' => number_format($newPrice, 0, ',', '.'),
                'total' => number_format($total, 0, ',', '.')
            ]);
        }

        return response()->json(['error' => 'Item not found'], 404);
    }
}
