<?php

namespace Database\Seeders;

use App\Models\Kocak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KocakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kocak::factory(10)->create();

        Kocak::create([
            'name' => 'Test Kocak',
            'email' => 'test email',
            'email_verified_at' => now(),
            'password' => Hash::make('test password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
