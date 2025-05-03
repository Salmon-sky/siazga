<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $User = [
            [
                'id' => 1,
                'img' => 'YAL.png',
                'nama' => 'Admin',
                'id_kelas' => null,
                'roles_id' => 1,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'admin@admin',
                'password' => Hash::make('1234567'),
            ],
            [
                'id' => 2,
                'img' => 'YAL.png',
                'nama' => 'Nur Eka Prawito',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'eka@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 3,
                'img' => 'YAL.png',
                'nama' => 'Tri Paryanti',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'tri@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 4,
                'img' => 'YAL.png',
                'nama' => 'Eliza Afriana',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'eliza@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 5,
                'img' => 'YAL.png',
                'nama' => 'Ruslan Abdul Ghani',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'ruslan@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 6,
                'img' => 'YAL.png',
                'nama' => 'Ali Imron',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'ali@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 7,
                'img' => 'YAL.png',
                'nama' => 'Novi Andry Ansyah',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'novi@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 8,
                'img' => 'YAL.png',
                'nama' => 'Susilawati',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'susi@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 9,
                'img' => 'YAL.png',
                'nama' => 'Zuraida',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'zuraida@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 10,
                'img' => 'YAL.png',
                'nama' => 'Roudatul Jannah',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'roudatul@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 11,
                'img' => 'YAL.png',
                'nama' => 'Susarti',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'susarti@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 12,
                'img' => 'YAL.png',
                'nama' => 'Selamet Kamso',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'selamet@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 13,
                'img' => 'YAL.png',
                'nama' => 'Nurhayati',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'nurhayati@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 14,
                'img' => 'YAL.png',
                'nama' => 'Lida',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'lida@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 15,
                'img' => 'YAL.png',
                'nama' => 'Mad Berawi',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'mad@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 16,
                'img' => 'YAL.png',
                'nama' => 'Surahmi',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'surahmi@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 17,
                'img' => 'YAL.png',
                'nama' => 'Mulyani',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'mulyani@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 18,
                'img' => 'YAL.png',
                'nama' => 'Sarah Dhiba Rangkuti',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'sarah@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 19,
                'img' => 'YAL.png',
                'nama' => 'Yahya',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'yahya@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 20,
                'img' => 'YAL.png',
                'nama' => 'Siti Maysaroh',
                'id_kelas' => null,
                'roles_id' => 2,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'siti@gmail.com',
                'password' => Hash::make('1234567'),

            ],
            [
                'id' => 21,
                'img' => 'YAL.png',
                'nama' => 'Siswa',
                'id_kelas' => 1,
                'roles_id' => 3,
                'no_hp' => '0123456789',
                'nomor_induk' => 1234567,
                'email' => 'siswa@siswa',
                'password' => Hash::make('1234567'),
            ],
            [
                'id' => 22,
                'img' => 'YAL.png',
                'nama' => 'Siswa 2',
                'id_kelas' => 2,
                'roles_id' => 3,
                'no_hp' => '0123456789',
                'nomor_induk' => 12345678,
                'email' => 'siswa2@siswa',
                'password' => Hash::make('1234567'),
            ],
            [
                'id' => 23,
                'img' => 'YAL.png',
                'nama' => 'Siswa 3',
                'id_kelas' => 3,
                'roles_id' => 3,
                'no_hp' => '0123456789',
                'nomor_induk' => 12345678,
                'email' => 'siswa3@siswa',
                'password' => Hash::make('1234567'),
            ],
            [
                'id' => 24,
                'img' => 'YAL.png',
                'nama' => 'Siswa 4',
                'id_kelas' => 4,
                'roles_id' => 3,
                'no_hp' => '0123456789',
                'nomor_induk' => 12345678,
                'email' => 'siswa4@siswa',
                'password' => Hash::make('1234567'),
            ],
            [
                'id' => 25,
                'img' => 'YAL.png',
                'nama' => 'Siswa 5',
                'id_kelas' => 5,
                'roles_id' => 3,
                'no_hp' => '0123456789',
                'nomor_induk' => 12345678,
                'email' => 'siswa5@siswa',
                'password' => Hash::make('1234567'),
            ],
            [
                'id' => 26,
                'img' => 'YAL.png',
                'nama' => 'Siswa 6',
                'id_kelas' => 6,
                'roles_id' => 3,
                'no_hp' => '0123456789',
                'nomor_induk' => 12345678,
                'email' => 'siswa6@siswa',
                'password' => Hash::make('1234567'),
            ],
            [
                'id' => 27,
                'img' => 'YAL.png',
                'nama' => 'khadziq',
                'id_kelas' => 7,
                'roles_id' => 3,
                'no_hp' => '0123456789',
                'nomor_induk' => 12345678,
                'email' => 'salmonsky850@gmail.com',
                'password' => Hash::make('1234567'),
            ]

        ];
        User::query()->insert($User);
    }
}
