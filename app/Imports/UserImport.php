<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Jurusan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UserImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        // Validasi sederhana
        if (!isset($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8])) {
            return null;
        }

        // Pastikan nomor_induk tidak duplikat di database
        $existingNomorInduk = User::where('nomor_induk', $row[2])
            ->where('email', '!=', $row[6]) // agar tidak bentrok saat update user yg sama
            ->exists();

        if ($existingNomorInduk) {
            return null; // Skip jika nomor_induk sudah dipakai user lain
        }

        // Cek atau buat jurusan
        $kelas = Jurusan::firstOrCreate(
            ['nama' => $row[3], 'kelas' => $row[4]],
            ['wali_kelas' => 4]
        );

        // Konversi role dari teks ke angka
        $roleString = strtolower(trim($row[8]));
        $roleMap = [
            'guru' => 2,
            'siswa' => 3,
        ];
        $role = $roleMap[$roleString] ?? 3;

        // Cek user berdasarkan email
        $checkUser = User::where('email', $row[6])->first();

        $data = [
            'nama' => $row[1],
            'nomor_induk' => $row[2],
            'id_kelas' => $kelas->id,
            'no_hp' => $row[5],
            'email' => $row[6],
            'password' => bcrypt($row[7]),
            'roles_id' => $role,
            'file_eraport' => null,
            'file_sertifikat' => null,
            'img' => null,
        ];

        if ($checkUser) {
            $checkUser->update($data);
            return null;
        }

        return new User($data);
    }

    public function startRow(): int
    {
        return 3;
    }
}
