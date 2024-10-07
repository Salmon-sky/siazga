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
                'id_siswa' => 8,
                'id_mapel' => 2,
                'id_semester' => 2,
                'id_guru' => 1,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 8,
                'id_mapel' => 4,
                'id_semester' => 2,
                'id_guru' => 3,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',

            ],
            [
                'id_siswa' => 8,
                'id_mapel' => 6,
                'id_semester' => 2,
                'id_guru' => 6,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 9,
                'id_mapel' => 5,
                'id_semester' => 2,
                'id_guru' => 4,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 9,
                'id_mapel' => 3,
                'id_semester' => 2,
                'id_guru' => 3,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            [
                'id_siswa' => 9,
                'id_mapel' => 5,
                'id_semester' => 2,
                'id_guru' => 6,
                'tugas' => 10,
                'uts' => 10,
                'uas' => 10,
                'keterangan' => 'giat belajar',
            ],
            ];
            Nilai::query()->insert($Nilai);
    }
}
