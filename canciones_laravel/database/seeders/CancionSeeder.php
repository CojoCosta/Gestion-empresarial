<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cancions')->insert([
            [
                'titulo' => 'OK',
                'grupo' => 'Rammstein',
                'album' => 'Zeit',
                'anio' => '2021'
                //'create_at' => now()
            ],
            [
                'titulo' => 'Fear of the dark',
                'grupo' => 'Iron Maiden',
                'album' => 'Fear of the dark',
                'anio' => '1990'
            ],
            [
                'titulo' => 'Taurus',
                'grupo' => 'MikeOldfield',
                'album' => 'Crises',
                'anio' => '1986'
            ]
        ]);
    }
}
