<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
use Carbon\Carbon;

class PengumumanSeeder extends Seeder
{

    public function run(): void
    {
        $tanggalSekarang = Carbon::now();

        $pengumuman = [
            [
                'judul' => 'Minggu depan Libur',
                'img' => "libur puasa.pdf",
                'created_at' => $tanggalSekarang->toDateTimeString(), // Menggunakan toDateTimeString() untuk memformat menjadi string tanggal dan waktu MySQL
                'updated_at' => $tanggalSekarang->toDateTimeString(), // Jika diperlukan, juga bisa mengisi updated_at
            ],
        ];

        // Menggunakan metode insert() untuk menyisipkan data ke dalam tabel 'jurusans'
        Pengumuman::query()->insert($pengumuman);
    }
}
