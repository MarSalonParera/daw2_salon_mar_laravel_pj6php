<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\organismes;
use Illuminate\Support\Facades\DB;

class TreballadorsRandomSeeder extends Seeder
{
   
         /**
     * Run the database seeds.
     */
    public function run(): void
    {
       organismes::factory()->count(50)->create();
        //$ids_factories=organismes::latest()->take(10)->pluck('tid');
        //DB::table('organismes')->whereIn('tid', $ids_factories)->delete();
    }
}