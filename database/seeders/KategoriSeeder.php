<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['nama' => 'Jajan Pasar', 'deskripsi' => 'Berbagai macam jajanan pasar tradisional'],
            ['nama' => 'Roll Tart', 'deskripsi' => 'Kue gulung tart dengan berbagai rasa'],
            ['nama' => 'Brownies', 'deskripsi' => 'Brownies lembut dan nikmat'],
            ['nama' => 'Paketan', 'deskripsi' => 'Paket kue dan roti lengkap'],
            ['nama' => 'Cake', 'deskripsi' => 'Kue tart untuk berbagai acara'],
            ['nama' => 'Roti Manis', 'deskripsi' => 'Roti dengan isian manis'],
            ['nama' => 'Roti Mini', 'deskripsi' => 'Roti kecil cocok untuk camilan'],
            ['nama' => 'Roti Tawar', 'deskripsi' => 'Roti tawar lembut untuk sarapan'],
            ['nama' => 'Roti Kepang', 'deskripsi' => 'Roti dengan bentuk kepang'],
            ['nama' => 'Donut', 'deskripsi' => 'Donat lezat dengan berbagai topping'],
            ['nama' => 'Puding', 'deskripsi' => 'Puding segar untuk dessert'],
            ['nama' => 'Kue Kering', 'deskripsi' => 'Aneka kue kering untuk hari spesial'],
        ];

        foreach ($kategori as $item) {
            Kategori::create($item);
        }
    }
}
