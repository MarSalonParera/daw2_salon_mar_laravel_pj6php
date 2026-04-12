<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Treballador;

class TreballadorsRandomSeeder extends Seeder
{
    public function run(): void
    {
        Treballador::factory()->count(5)->create();
    }
}