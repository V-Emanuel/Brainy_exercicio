<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ['estado' => 'Bahia', 'UF' => 'BA'],
            ['estado' => 'Paraíba', 'UF' => 'PB'],
            ['estado' => 'Pernambuco', 'UF' => 'SP'],
        ];

        DB::table('estados')->insert($estados);
    }
}
