<?php

namespace Tests\Feature\Iteration2;

use Tests\TestCase;
use App\Models\User;


class KeloladatapersemestersiswaTest extends TestCase
{
    public function test_admin_can_add_data_semester_siswa()
    {
        $this->actingAs(User::find(1));
        $tambahDatasemester = [
            'nama' => 'Semester Ganjil Tahun 2025/2026',
        ];

        $response = $this->post(route('admin.semester.store'), $tambahDatasemester);

        $this->assertDatabaseHas('semester', $tambahDatasemester);
    }

    public function test_admin_update_semester_siswa()
    {
        // Setup user untuk autentikasi
        $this->actingAs(User::find(1));

        // Data siswa untuk diupdate
        $editdatasiswa = [
            'nama' => 'Semester Ganjil Tahun 2036/2037',
        ];

        // Kirim request PUT untuk update
        $response = $this->put(route('admin.semester.update', 5), $editdatasiswa);

        // Pastikan data di database sesuai
        $this->assertDatabaseHas('semester', $editdatasiswa);
    }

    public function test_admin_delete_semester_siswa()
    {
        $this->actingAs(User::find(1));
        $response = $this->delete(route('admin.semester.destroy', 7));
        $this->assertDatabaseMissing('semester', ['id' => 7]);
    }
}
