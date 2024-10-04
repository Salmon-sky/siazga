<?php

namespace Database\Seeders;

use App\Models\Eka;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eka::factory(10)->create();

        Eka::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('admin'),
        ]);
    }
}
