<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MapelSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(PengumumanSeeder::class);
        $this->call(JadwalPelajaranSeeder::class);
        $this->call(NilaiSeeder::class);
        $this->call(PresensiSeeder::class);
        $this->call(SemesterSeeder::class);

    }
}