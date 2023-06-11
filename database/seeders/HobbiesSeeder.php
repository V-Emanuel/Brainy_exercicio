<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbiesSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobbies = [
            ['hobbie' => 'Jogar Xadrez'],
            ['hobbie' => 'Tocar violão'],
            ['hobbie' => 'Dançar Forró'],
            ['hobbie' => 'Sair com os amigos'],
            ['hobbie' => 'Ficar em casa'],
        ];

        DB::table('hobbies')->insert($hobbies);
    }
}
