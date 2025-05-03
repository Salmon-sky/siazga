<?php

namespace Tests\Feature\Iteration1;

use Tests\TestCase;
use App\Models\User;

class KeloladatasiswaTest extends TestCase
{
    public function test_admin_can_add_data_siswa()
    {
        $this->actingAs(User::find(1));
        $tambahDatasiswa = [
            'nama' => 'khadzziiqq',
            'nomor_induk' => '123456789',
            'no_hp' => '123456789',
            'email' => 'khz@gmail.com',
            'id_kelas' => '1',
        ];

        $response = $this->post(route('admin.siswa.store'), $tambahDatasiswa);

        $this->assertDatabaseHas('users', $tambahDatasiswa);
    }
    public function test_admin_update_siswa()
    {
        // Setup user untuk autentikasi
        $this->actingAs(User::find(1));

        // Data siswa untuk diupdate
        $editdatasiswa = [
            'nama' => 'Siswa',
            'nomor_induk' => '1234567',
            'no_hp' => '0123456789',
            'email' => 'siswa@siswa',
            'id_kelas' => '1',
        ];

        // Kirim request PUT untuk update
        $response = $this->put(route('admin.siswa.update', 1), $editdatasiswa);

        // Pastikan data di database sesuai
        $this->assertDatabaseHas('users', $editdatasiswa);
    }

    public function test_admin_delete_siswa()
    {
        $this->actingAs(User::find(1));
        $response = $this->delete(route('admin.siswa.destroy', 28));
        $this->assertDatabaseMissing('users', ['id' => 28]);
    }
}
