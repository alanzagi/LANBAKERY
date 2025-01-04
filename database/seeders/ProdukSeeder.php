<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            // Produk untuk kategori 1: Jajan Pasar
            ['nama' => 'Onde-onde', 'deskripsi' => 'Onde-onde dengan isi kacang hijau', 'harga' => 2000, 'stok' => 50, 'gambar' => 'seeder.jpg', 'kategori_id' => 1],
            ['nama' => 'Klepon', 'deskripsi' => 'Klepon isi gula merah', 'harga' => 1500, 'stok' => 50, 'gambar' => 'seeder.jpg', 'kategori_id' => 1],

            // Produk untuk kategori 2: Roll Tart
            ['nama' => 'Roll Tart Coklat', 'deskripsi' => 'Roll tart dengan rasa coklat', 'harga' => 25000, 'stok' => 20, 'gambar' => 'seeder.jpg', 'kategori_id' => 2],
            ['nama' => 'Roll Tart Vanilla', 'deskripsi' => 'Roll tart dengan rasa vanilla', 'harga' => 25000, 'stok' => 20, 'gambar' => 'seeder.jpg', 'kategori_id' => 2],

            // Produk untuk kategori 3: Brownies
            ['nama' => 'Brownies Kukus', 'deskripsi' => 'Brownies kukus lembut', 'harga' => 30000, 'stok' => 30, 'gambar' => 'seeder.jpg', 'kategori_id' => 3],
            ['nama' => 'Brownies Panggang', 'deskripsi' => 'Brownies panggang dengan rasa coklat', 'harga' => 35000, 'stok' => 25, 'gambar' => 'seeder.jpg', 'kategori_id' => 3],

            // Produk untuk kategori 4: Paketan
            ['nama' => 'Paket Hemat', 'deskripsi' => 'Paket roti dan kue untuk keluarga', 'harga' => 50000, 'stok' => 10, 'gambar' => 'seeder.jpg', 'kategori_id' => 4],
            ['nama' => 'Paket Premium', 'deskripsi' => 'Paket premium dengan kue spesial', 'harga' => 75000, 'stok' => 10, 'gambar' => 'seeder.jpg', 'kategori_id' => 4],

            // Produk untuk kategori 5: Cake
            ['nama' => 'Cake Coklat', 'deskripsi' => 'Cake coklat dengan topping cream', 'harga' => 100000, 'stok' => 5, 'gambar' => 'seeder.jpg', 'kategori_id' => 5],
            ['nama' => 'Cake Strawberry', 'deskripsi' => 'Cake dengan rasa strawberry segar', 'harga' => 120000, 'stok' => 5, 'gambar' => 'seeder.jpg', 'kategori_id' => 5],

            // Produk untuk kategori 6: Roti Manis
            ['nama' => 'Roti Coklat', 'deskripsi' => 'Roti dengan isian coklat', 'harga' => 5000, 'stok' => 50, 'gambar' => 'seeder.jpg', 'kategori_id' => 6],
            ['nama' => 'Roti Keju', 'deskripsi' => 'Roti dengan isian keju', 'harga' => 6000, 'stok' => 50, 'gambar' => 'seeder.jpg', 'kategori_id' => 6],

            // Produk untuk kategori 7: Roti Mini
            ['nama' => 'Mini Burger', 'deskripsi' => 'Roti mini berbentuk burger', 'harga' => 7000, 'stok' => 30, 'gambar' => 'seeder.jpg', 'kategori_id' => 7],
            ['nama' => 'Mini Pizza', 'deskripsi' => 'Pizza kecil untuk camilan', 'harga' => 8000, 'stok' => 30, 'gambar' => 'seeder.jpg', 'kategori_id' => 7],

            // Produk untuk kategori 8: Roti Tawar
            ['nama' => 'Roti Tawar Putih', 'deskripsi' => 'Roti tawar klasik', 'harga' => 15000, 'stok' => 20, 'gambar' => 'seeder.jpg', 'kategori_id' => 8],
            ['nama' => 'Roti Tawar Gandum', 'deskripsi' => 'Roti tawar dengan gandum', 'harga' => 18000, 'stok' => 15, 'gambar' => 'seeder.jpg', 'kategori_id' => 8],

            // Produk untuk kategori 9: Roti Kepang
            ['nama' => 'Roti Kepang Coklat', 'deskripsi' => 'Roti kepang rasa coklat', 'harga' => 25000, 'stok' => 10, 'gambar' => 'seeder.jpg', 'kategori_id' => 9],
            ['nama' => 'Roti Kepang Keju', 'deskripsi' => 'Roti kepang dengan rasa keju', 'harga' => 30000, 'stok' => 10, 'gambar' => 'seeder.jpg', 'kategori_id' => 9],

            // Produk untuk kategori 10: Donut
            ['nama' => 'Donut Coklat', 'deskripsi' => 'Donut dengan topping coklat', 'harga' => 5000, 'stok' => 50, 'gambar' => 'seeder.jpg', 'kategori_id' => 10],
            ['nama' => 'Donut Gula', 'deskripsi' => 'Donut klasik dengan gula tabur', 'harga' => 4000, 'stok' => 50, 'gambar' => 'seeder.jpg', 'kategori_id' => 10],

            // Produk untuk kategori 11: Puding
            ['nama' => 'Puding Coklat', 'deskripsi' => 'Puding rasa coklat', 'harga' => 7000, 'stok' => 30, 'gambar' => 'seeder.jpg', 'kategori_id' => 11],
            ['nama' => 'Puding Buah', 'deskripsi' => 'Puding dengan potongan buah', 'harga' => 8000, 'stok' => 30, 'gambar' => 'seeder.jpg', 'kategori_id' => 11],

            // Produk untuk kategori 12: Kue Kering
            ['nama' => 'Kastengel', 'deskripsi' => 'Kue kering rasa keju', 'harga' => 100000, 'stok' => 20, 'gambar' => 'seeder.jpg', 'kategori_id' => 12],
            ['nama' => 'Nastar', 'deskripsi' => 'Kue kering isi nanas', 'harga' => 90000, 'stok' => 20, 'gambar' => 'seeder.jpg', 'kategori_id' => 12],
        ];

        foreach ($produk as $item) {
            Produk::create($item);
        }
    }
}
