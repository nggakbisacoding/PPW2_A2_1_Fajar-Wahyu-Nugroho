<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GudangBarang;
use Illuminate\Support\Facades\DB;
use Database\Factories\GudangBarangFactory;

class GudangBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GudangBarang::factory()->count(10)->create();
    }
}
