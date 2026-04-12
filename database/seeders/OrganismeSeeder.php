<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organisme;

class OrganismeSeeder extends Seeder
{
    public function run(): void
    {
        Organisme::factory()->count(5)->create();
    }
}