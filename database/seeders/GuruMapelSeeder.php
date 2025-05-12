<?php

namespace Database\Seeders;

use App\Models\GuruMapel;
use App\Models\User;
use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $gurus = User::where('roles_id', 2)->get();
        $mapels = Mapel::all();
        foreach ($gurus as $guru) {
            $attachedMapel = $mapels->inRandomOrder()->take(rand(1, 2))->pluck('id');
            $guru->mapels()->attach($attachedMapel);
        }
    }
}
