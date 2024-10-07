<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Semester;

class SemesterSeeder extends Seeder
{
    
    public function run(): void
    {
        $semester = [
            [
                'nama' => 'Semester Ganjil Tahun 2020/2021',
            ],
            [
                'nama' => 'Semester Genap Tahun 2020/2021',
            ],
            [
                'nama' => 'Semester Ganjil Tahun 2021/2022',
            ],
            [
                'nama' => 'Semester Genap Tahun 2021/2022',
            ],

        ];
        Semester::query()->insert($semester);
    }
}