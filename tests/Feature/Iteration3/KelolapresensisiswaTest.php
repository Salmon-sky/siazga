<?php

namespace Tests\Feature\Iteration3;

use Tests\TestCase;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Presensi;


class KelolapresensisiswaTest extends TestCase
{
    public function test_guru_dapat_mengubah_status_presensi_siswa()
    {
        // Buat user guru dummy
        $guru = User::find(2); // Pastikan user ID 2 adalah guru

        // Jika user ID 2 tidak ada, buat user baru dengan factory
        if (!$guru) {
            $guru = User::factory()->create([
                'roles_id' => 2, // roles_id 2 sebagai guru
            ]);
        }

        // Buat data siswa dummy
        $siswa = User::factory()->create([
            'roles_id' => 26, // Role 26 sebagai siswa
        ]);

        // Buat data mata pelajaran dummy
        $mapel = Mapel::create([
            'id' => 1, // Asumsi ID mapel 1 ada di database
            'nama' => 'Matematika Peminatan',
        ]);

        // Buat data presensi dummy
        $presensi = Presensi::create([
            'id_user' => $guru->id,
            'id_siswa' => $siswa->id,
            'id_mapel' => $mapel->id,
            'status' => 'Hadir',
        ]);

        // Login sebagai guru
        $this->actingAs($guru);

        // Kirim request untuk mengubah status menjadi 'Telat'
        $response = $this->put(route('guru.presensi.update', $presensi->id), [
            'status' => 'Telat',
        ]);

        // Pastikan redirect setelah update
        $response->assertStatus(302);

        // Pastikan data di database telah berubah
        $this->assertDatabaseHas('presensis', [
            'id' => $presensi->id,
            'status' => 'Telat',
        ]);
    }

}
