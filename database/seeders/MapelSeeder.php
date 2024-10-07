<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelSeeder extends Seeder
{
    
    public function run(): void
    {
        $mapel = [

            ];
        Mapel::query()->insert($mapel);
}
}