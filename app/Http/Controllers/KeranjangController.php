<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

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

    /**
     * Menambahkan produk ke keranjang (menggunakan session)
     */
    public function tambahKeKeranjang(Request $request)
    {
        $produkId = $request->input('produk_id');
        $jumlah = $request->input('jumlah', 1);

        // Cari produk berdasarkan ID
        $produk = Produk::find($produkId);
        if (!$produk) {
            return response()->json(['error' => 'Produk tidak ditemukan'], 404);
        }

        // Ambil data keranjang dari session, jika tidak ada maka buat array kosong
        $keranjang = session()->get('keranjang', []);

        // Jika produk sudah ada di keranjang, tambahkan jumlahnya
        if (isset($keranjang[$produkId])) {
            $keranjang[$produkId]['jumlah'] += $jumlah;
        } else {
            // Tambahkan produk ke dalam keranjang
            $keranjang[$produkId] = [
                'id' => $produk->id,
                'nama' => $produk->nama,
                'harga' => $produk->harga,
                'jumlah' => $jumlah,
                'gambar' => $produk->gambar
            ];
        }

        // Simpan kembali ke session
        session()->put('keranjang', $keranjang);

        return response()->json(['message' => 'Produk ditambahkan ke keranjang', 'keranjang' => $keranjang]);
    }

    /**
     * Menghapus produk dari keranjang
     */
    public function hapusDariKeranjang($id)
    {
        $keranjang = session()->get('keranjang', []);

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            session()->put('keranjang', $keranjang);
        }

        return redirect()->route('keranjang')->with('success', 'Produk dihapus dari keranjang.');
    }
}
