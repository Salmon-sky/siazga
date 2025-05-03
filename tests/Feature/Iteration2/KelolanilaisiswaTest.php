<?php

namespace Tests\Feature\Iteration2;

use Tests\TestCase;
use App\Models\User;

class KelolanilaisiswaTest extends TestCase
{
    public function test_guru_dapat_mengupdate_nilai_siswa()
    {
        // Setup user untuk autentikasi
        $user = User::find(2); // Ambil user dengan ID 2
        $this->actingAs($user); // Login sebagai user

        // Data untuk update nilai
        $updatedatanilai = [
            'id_guru' => 3,
            'tugas' => '7',
            'uts' => '7',
            'uas' => '7',
            'keterangan' => 'buruk',
        ];

        // Kirim request PUT untuk update nilai
        $response = $this->put(route('guru.nilai.update', 6), $updatedatanilai);

        // Pastikan update berhasil dengan redirect
        $response->assertStatus(302);
    }
}
