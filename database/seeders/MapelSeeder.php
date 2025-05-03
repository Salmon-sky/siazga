<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelSeeder extends Seeder
{

    public function run(): void
    {
        $mapel = [
            [
                'nama' => 'Matematika Peminatan',
            ],
            [
                'nama' => 'Matematika Wajib',
            ],
            [
                'nama' => 'Bahasa Indonesia',
            ],
            [
                'nama' => 'Bahasa Inggris',
            ],
            [
                'nama' => 'PKN',
            ],
            [
                'nama' => 'Seni Budaya',
            ],
            [
                'nama' => 'Sejarah',
            ],
            [
                'nama' => 'Agama',
            ],
            [
                'nama' => 'IPS',
            ],
            [
                'nama' => 'IPA',
            ],
            [
                'nama' => 'Bahasa Lampung',
            ],
            [
                'nama' => 'Bahasa Arab',
            ],
            [
                'nama' => 'Fiqih',
            ],
            [
                'nama' => 'Aqidah Akhlaq',
            ],
            [
                'nama' => 'Biologi',
            ],
            [
                'nama' => 'Kimia',
            ],
            [
                'nama' => 'Fisika',
            ],
            [
                'nama' => 'Penjas',
            ],
            [
                'nama' => 'TIK',
            ],
            ];
        Mapel::query()->insert($mapel);
}
}
