<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100)->create();

        User::factory()->create([
            'nama' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123'),
            'roles_id' => 1,
            'nomor_induk' => 123456789,
            'no_hp' => 123456789,
        ]);
    }
}
