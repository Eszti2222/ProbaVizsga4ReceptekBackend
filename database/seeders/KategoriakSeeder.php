<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoriaks')->insert([
            ['nev' => 'főétel'],
            ['nev' => 'leves'],
            ['nev' => 'édesség'],
            ['nev' => 'saláta'],
        ]);

    }
}
