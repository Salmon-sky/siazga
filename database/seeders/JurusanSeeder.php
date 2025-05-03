<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{

    public function run(): void
    {
        $jurusan = [
            [
                'nama' => 'IPA',
                'kelas' => 'X',
                'wali_kelas' => 7,
            ],
            [
                'nama' => 'IPA',
                'kelas' => 'XI',
                'wali_kelas' => 2,
            ],
            [
                'nama' => 'IPA',
                'kelas' => 'XII',
                'wali_kelas' => 3,
            ],
            [
                'nama' => 'IPS',
                'kelas' => 'X',
                'wali_kelas' => 4,
            ],
            [
                'nama' => 'IPS',
                'kelas' => 'XI',
                'wali_kelas' => 5,
            ],
            [
                'nama' => 'IPS',
                'kelas' => 'XII',
                'wali_kelas' => 6,
            ],
        ];
        Jurusan::query()->insert($jurusan);
    }
}
