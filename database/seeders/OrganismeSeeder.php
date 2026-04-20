<?php

namespace Database\Seeders;

use App\Models\Organisme;
use Illuminate\Database\Seeder;

class OrganismeSeeder extends Seeder
{
    public function run(): void
    {
        Organisme::factory()->count(10)->create();
    }
}
