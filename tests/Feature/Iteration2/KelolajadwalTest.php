<?php

namespace Tests\Feature\Iteration2;

use App\Models\JadwalPelajaran;
use Tests\TestCase;
use App\Models\User;

class KelolajadwalTest extends TestCase
{
    public function test_admin_can_add_jadwal()
    {
        $this->actingAs(User::find(1));
        $tambahDatajadwal = [
            'jam_ke' => 3,
            'id_kelas' => 1,
            'id_mapel' => 3,
            'id_guru' => 4,
            'hari' => 'Sabtu',
            'jam_mulai' => '09.00',
            'jam_selesai' => '10.00',
        ];

        $response = $this->post(route('admin.jadwal.store'), $tambahDatajadwal);

        $this->assertDatabaseHas('jadwal_pelajaran', $tambahDatajadwal);
    }
    public function test_admin_update_jadwal()
    {
        // Setup user untuk autentikasi
        $this->actingAs(User::find(1));

        // Data untuk diupdate
        $jadwal = JadwalPelajaran::query()->inRandomOrder()->limit(1)->first()->makeHidden(['created_at', 'updated_at']);
        $jadwal->hari = 'hari baru';

        // Kirim request PUT untuk update
        $response = $this->put(route('admin.jadwal.update', ['id' => $jadwal->id]), $jadwal->toArray());

        // Pastikan data di database sesuai
        $this->assertDatabaseHas('jadwal_pelajaran', $jadwal->toArray());
    }

    public function test_admin_delete_jadwal()
    {
        $this->actingAs(User::find(1));
        $response = $this->delete(route('admin.jadwal.destroy', 29));
        $this->assertDatabaseMissing('jadwal_pelajaran', ['id' => 29]);
    }
}
