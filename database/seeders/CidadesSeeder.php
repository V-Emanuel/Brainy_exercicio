<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    { /**
      * Run the database seeds.
      *
      * @return void
      */
        $cidades = [
            ['cidade' => 'Campo Formoso', 'estadoId' => 1],
            ['cidade' => 'Salvador', 'estadoId' => 1],
            ['cidade' => 'Senhor do Bonfim', 'estadoId' => 1],
            ['cidade' => 'Campina Grande', 'estadoId' => 2],
            ['cidade' => 'João Pessoa', 'estadoId' => 2],
            ['cidade' => 'Sumé', 'estadoId' => 2],
            ['cidade' => 'Petrolina', 'estadoId' => 3],
            ['cidade' => 'Recife', 'estadoId' => 3],
            ['cidade' => 'Salgueiro', 'estadoId' => 3],

        ];

        DB::table('cidades')->insert($cidades);
    }
}