<?php

namespace Database\Seeders;

use App\Models\Haziq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaziqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Haziq::factory(10)->create();

        Haziq::create([
            'name' => 'Test Haziq',
            'description' => 'test description',
            'image' => 'test image',
        ]);
    }
}
