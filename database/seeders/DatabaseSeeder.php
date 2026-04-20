<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'gestor@onu.local'],
            [
                'name' => 'Gestor Inicial',
                'role' => 'gestor',
                'password' => 'Gestor#2026',
            ]
        );

        User::updateOrCreate(
            ['email' => 'consultor@onu.local'],
            [
                'name' => 'Consultor Inicial',
                'role' => 'consultor',
                'password' => 'Consultor#2026',
            ]
        );

        $this->call([
            OrganismeSeeder::class,
        ]);
    }
}
