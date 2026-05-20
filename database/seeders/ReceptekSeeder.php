<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceptekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        DB::table('recepteks')->insert([
            [
                'nev' => 'Gulyásleves',
                'kat_id' => 2,
                'kep_eleresi_ut' => 'gulyas.png',
                'leiras' => 'Finom leves'
            ],
            [
                'nev' => 'Palacsinta',
                'kat_id' => 3,
                'kep_eleresi_ut' => 'palacsinta.png',
                'leiras' => 'Édes desszert'
            ]
        ]);
    }
}
