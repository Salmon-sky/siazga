<?php

namespace Tests\Feature\Iteration4;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class KelolaprofilTest extends TestCase
{
    public function test_user_dapat_mengakses_halaman_edit_profil()
    {
        $user = User::find(10); // Ambil user dengan ID 2
        $this->actingAs($user); // Login sebagai user

        $response = $this->get(route('guru.profil.edit', $user->id)); // Akses halaman edit profil

        $response->assertStatus(200); // Pastikan halaman bisa diakses
        $response->assertSee('Update Profil'); // Pastikan halaman berisi form edit
    }

    public function test_user_dapat_mengupdate_profil()
    {
        $user = User::find(10); // Ambil user dengan ID 10
        $this->actingAs($user); // Login sebagai user

        $updateprofil = [
            'nama' => 'Jannah',
            'nomor_induk' => '12345678',
            'no_hp' => '08123456789',
            'email' => 'Jannah@gmail.com',
        ];

        $response = $this->put(route('guru.profil.update', $user->id), $updateprofil); // Gunakan $user->id

        $response->assertStatus(302); // Pastikan redirect sukses setelah update
        $this->assertDatabaseHas('users', ['id' => $user->id] + $updateprofil); // Pastikan data berubah di DB
    }

    public function test_guru_dapat_mengupload_foto_profil()
    {
        $user = User::find(2); // cari user di database

        Storage::fake('public'); // Gunakan storage palsu

        $file = UploadedFile::fake()->image('YAL.png'); // Simulasi upload file gambar

        $this->actingAs($user); // Login sebagai user

        $response = $this->put(route('guru.profil.update', $user->id), [
            'img' => $file,
        ]);

        $response->assertRedirect(); // Pastikan ada redirect setelah update
    }
    public function test_siswa_dapat_mengupload_foto_profil()
    {
        $user = User::find(3); // cari user di database

        Storage::fake('public'); // Gunakan storage palsu

        $file = UploadedFile::fake()->image('YAL.png'); // Simulasi upload file gambar

        $this->actingAs($user); // Login sebagai user

        $response = $this->put(route('guru.profil.update', $user->id), [
            'img' => $file,
        ]);

        $response->assertRedirect(); // Pastikan ada redirect setelah update
    }
}
