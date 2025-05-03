<?php

namespace Tests\Feature\Iteration4;

use Tests\TestCase;
use App\Models\User;


class KelolapengumumanTest extends TestCase
{
    public function test_admin_can_add_pengumuman()
    {
        $file = 'assets/img/1729854088.pdf';
        $tanggalSekarang = now();
        $this->actingAs(User::find(1));
        $tambahDatapengumuman = [
            'judul' => 'Pengumuman 1',
            'created_at' => $tanggalSekarang->toDateTimeString(),
            'updated_at' => $tanggalSekarang->toDateTimeString(),
        ];

        $response = $this->post(route('admin.pengumuman.store'), $tambahDatapengumuman);

        $this->assertDatabaseHas('pengumuman', $tambahDatapengumuman);
    }
    public function test_admin_update_pengumuman()
    {
        $file = 'assets/img/1729854088.pdf';
        $tanggalSekarang = now();
        $this->actingAs(User::find(1));
        $editdatapengumuman = [
            'judul' => 'Pengumuman 1',
            'img' => $file,
            'created_at' => $tanggalSekarang->toDateTimeString(),
            'updated_at' => $tanggalSekarang->toDateTimeString(),
        ];

        // Kirim request PUT untuk update
        $response = $this->put(route('admin.pengumuman.update' , 1), $editdatapengumuman);

        // Pastikan data di database sesuai
        $this->assertDatabaseHas('pengumuman', $editdatapengumuman);
    }

    public function test_admin_delete_pengumuman()
    {
        $this->actingAs(User::find(1));
        $response = $this->delete(route('admin.pengumuman.destroy',2));
        $this->assertDatabaseMissing('pengumuman', ['id' => 2]);
    }
}
