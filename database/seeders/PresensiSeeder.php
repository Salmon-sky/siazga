<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Presensi;
use Carbon\Carbon;

class PresensiSeeder extends Seeder
{

    public function run(): void
    {

        $tanggalSekarang = Carbon::now();

        $Presensi = [
            [
                'id_siswa' => 21,
                'id_mapel' => 1,
                'status' => 'Hadir',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),
            ],
            [
                'id_siswa' => 22,
                'id_mapel' => 1,
                'status' =>'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa' => 23,
                'id_mapel' => 1,
                'status' =>'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa' => 24,
                'id_mapel' => 1,
                'status' =>'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa' => 25,
                'id_mapel' => 1,
                'status' =>'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa' => 26,
                'id_mapel' => 1,
                'status' =>'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            ];
            Presensi::query()->insert($Presensi);
    }
}
