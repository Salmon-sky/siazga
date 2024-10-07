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
            ],
            [
                'nama' => 'IPA',
                'kelas' => 'XI',
            ],
            [
                'nama' => 'IPA',
                'kelas' => 'XII',
            ],
            [
                'nama' => 'IPS',
                'kelas' => 'X',
            ],
            [
                'nama' => 'IPS',
                'kelas' => 'XI',
            ],
            [
                'nama' => 'IPS',
                'kelas' => 'XII',
            ],
        ];
        Jurusan::query()->insert($jurusan);
    }
}
