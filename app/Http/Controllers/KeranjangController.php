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
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json([
                'status' => 'error',
                'message' => 'Produk tidak ditemukan.'
            ], 404);
        }

        $quantity = (int) $request->input('quantity', 1);
        $keranjang = Session::get('keranjang', []);

        if (isset($keranjang[$id])) {
            $keranjang[$id]['quantity'] += $quantity;
        } else {
            $keranjang[$id] = [
                "gambar" => $produk->gambar,
                "nama" => $produk->nama,
                "harga" => $produk->harga,
                "quantity" => $quantity
            ];
        }

        Session::put('keranjang', $keranjang);

        return response()->json([
            'status' => 'success',
            'message' => 'Produk berhasil ditambahkan ke keranjang!',
            'keranjang' => $keranjang
        ]);
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

    public function dataDiri(Request $request)
    {
        $keranjang = $request->input('produk'); // Mengambil data dari form
        $totalHarga = array_reduce($keranjang, function ($total, $item) {
            return $total + ($item['harga'] * $item['quantity']);
        }, 0);

        return view('keranjang.data-diri', [
            'title' => 'Data Diri',
            'keranjang' => $keranjang,
            'totalHarga' => $totalHarga
        ]);
    }

    public function checkoutKeranjang(Request $request)
    {
        $keranjang = Session::get('keranjang', []);

        // Buat daftar produk dalam format WhatsApp
        $daftarProduk = "";
        foreach ($keranjang as $item) {
            $daftarProduk .= "{$item['nama']} x {$item['quantity']} = Rp" . number_format($item['harga'] * $item['quantity'], 0, ',', '.') . "%0A";
        }

        // Format pesan WhatsApp
        $pesan = "Halo, saya ingin melakukan pemesanan:%0A%0A" .
            "Nama: {$request->nama}%0A" .
            "Alamat: {$request->alamat}%0A" .
            "Nomor HP: {$request->nomor_hp}%0A%0A" .
            "Produk yang dipesan:%0A" . $daftarProduk;

        // Nomor WhatsApp tujuan
        $nomorKaryawan = "628123456789";
        $waLink = "https://wa.me/$nomorKaryawan?text=$pesan";

        // Hapus session keranjang
        Session::forget('keranjang');

        // Kirim JSON agar JavaScript menangani redirect
        return response()->json([
            'success' => true,
            'waLink' => $waLink
        ]);
    }
}
