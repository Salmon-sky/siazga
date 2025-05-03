<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{

    public function run(): void
    {
        $Nilai = [
            [
                'id_siswa' => 21,
                'id_mapel' => 2,
                'id_semester' => 2,
                'id_guru' => 1,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 22,
                'id_mapel' => 4,
                'id_semester' => 2,
                'id_guru' => 3,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',

            ],
            [
                'id_siswa' => 23,
                'id_mapel' => 6,
                'id_semester' => 2,
                'id_guru' => 7,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 24,
                'id_mapel' => 13,
                'id_semester' => 2,
                'id_guru' => 8,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 25,
                'id_mapel' => 17,
                'id_semester' => 2,
                'id_guru' => 9,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 26,
                'id_mapel' => 18,
                'id_semester' => 2,
                'id_guru' => 10,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],

            ];
            Nilai::query()->insert($Nilai);
    }
}
