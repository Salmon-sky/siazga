<?php
namespace Database\Seeders;

use App\Models\Presensi;
use App\Models\Semester;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PresensiSeeder extends Seeder
{

    public function run(): void
    {

        $tanggalSekarang = Carbon::now();

        $presensis = [
            [
                'id_siswa'   => 21,
                'id_mapel'   => 1,
                'status'     => 'Hadir',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),
            ],
            [
                'id_siswa'   => 22,
                'id_mapel'   => 1,
                'status'     => 'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa'   => 23,
                'id_mapel'   => 1,
                'status'     => 'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa'   => 24,
                'id_mapel'   => 1,
                'status'     => 'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa'   => 25,
                'id_mapel'   => 1,
                'status'     => 'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
            [
                'id_siswa'   => 26,
                'id_mapel'   => 1,
                'status'     => 'Telat',
                'created_at' => $tanggalSekarang->toDateTimeString(),
                'updated_at' => $tanggalSekarang->toDateTimeString(),

            ],
        ];
        $semester = Semester::where('is_active', 1)->first();
        foreach($presensis as $Presensi) {
            Presensi::create(array_merge(
                $Presensi, [
                'semester_id' => $semester->id,
            ]));
        }
    }
}
