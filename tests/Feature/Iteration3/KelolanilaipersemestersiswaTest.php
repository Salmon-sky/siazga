<?php

namespace Tests\Feature\Iteration3;

use Tests\TestCase;
use App\Models\Nilai;
use App\Models\User;

class KelolanilaipersemestersiswaTest extends TestCase
{
    public function test_user_dapat_mengakses_halaman_edit_nilai_persemester_siswa()
    {
        $user = User::find(2); // Ambil user dengan ID 2
        $this->actingAs($user); // Login sebagai user

        $response = $this->get(route('guru.nilai.tabel', $user->id)); // Akses halaman

        $response->assertStatus(200); // Pastikan halaman bisa diakses
        $response->assertSee('Nilai'); // Pastikan halaman berisi form edit
    }
}
