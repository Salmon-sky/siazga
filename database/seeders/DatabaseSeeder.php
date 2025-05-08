<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Semester;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SemesterSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JurusanSeeder::class);
        $semesters = Semester::all();
        foreach ($semesters as $semester) {
            $semester->update(['is_active' => 1]);
            $this->call(JadwalPelajaranSeeder::class);
            $this->call(NilaiSeeder::class);
            $this->call(PresensiSeeder::class);
            $semester->update(['is_active' => 0]);
        }
        $semester->latest()->update(['is_active' => 1]);
        $this->call(PengumumanSeeder::class);

    }
}
