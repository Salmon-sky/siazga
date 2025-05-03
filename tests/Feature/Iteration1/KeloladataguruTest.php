<?php

namespace Tests\Feature\Iteration1;

use Tests\TestCase;
use App\Models\User;


class KeloladataguruTest extends TestCase
{
    public function test_admin_can_add_data_guru()
    {
        $this->actingAs(User::find(1));
        $tambahDataguru = [
            'nama' => 'aku guru sma',
            'nomor_induk' => '123456789',
            'no_hp' => '123456789',
            'email' => 'gurusma@gmail.com',
            'id_kelas' => '1',
        ];

        $response = $this->post(route('admin.guru.store', 32), $tambahDataguru);

        $this->assertDatabaseHas('users', $tambahDataguru);
    }

    public function test_admin_update_guru()
    {
        // Setup user untuk autentikasi
        $this->actingAs(User::find(1));

        // Data untuk diupdate
        $editdataguru = [
            'nama' => 'aku guru sma',
            'nomor_induk' => '123456789',
            'no_hp' => '123456789',
            'email' => 'gurusma@gmail.com',
            'id_kelas' => '1',
        ];

        // Kirim request PUT untuk update
        $response = $this->put(route('admin.guru.update', 32), $editdataguru);

        // Pastikan data di database sesuai
        $this->assertDatabaseHas('users', $editdataguru);
    }

    public function test_admin_delete_guru()
    {
        $this->actingAs(User::find(1));
        $response = $this->delete(route('admin.guru.destroy', 29));
        $this->assertDatabaseMissing('users', ['id' => 29]);
    }
}
