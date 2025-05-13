<?php
namespace Database\Seeders;

use App\Models\GuruMapel;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Database\Seeder;

class GuruMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $gurus  = User::where('roles_id', 2)->get();
        // $mapels = Mapel::all();
        // foreach ($gurus as $guru) {
        //     $attachedMapel = $mapels->inRandomOrder()->take(rand(1, 2))->pluck('id');
        //     $guru->mapels()->attach($attachedMapel);
        // }

        $guruMapel = [
            [
                'guru_id'  => 2,
                'mapel_id' => [1, 3],
            ],
            [
                'guru_id'  => 3,
                'mapel_id' => [2, 4],
            ],
            [
                'guru_id'  => 4,
                'mapel_id' => [5, 6],
            ],
            [
                'guru_id'  => 5,
                'mapel_id' => [7, 8],
            ],
            [
                'guru_id'  => 6,
                'mapel_id' => [9, 10],
            ],
            [
                'guru_id'  => 7,
                'mapel_id' => [11, 12],
            ],
        ];

        foreach ($guruMapel as $data) {
            foreach($data['mapel_id'] as $mapel_id) {
                GuruMapel::create([
                    'id_guru'  => $data['guru_id'],
                    'id_mapel' => $mapel_id,
                ]);
            }
        }

    }
}
