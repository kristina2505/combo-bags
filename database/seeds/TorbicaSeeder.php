<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TorbicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('torbicas')->insert([[
            'model'=>'model1',
            'opis'=>'opis1',
            'materijal'=>'materijal1',
            'cena'=>'2500',
            'oblik'=>'krug1'
        ],[
            'model'=>'model2',
            'opis'=>'opis2',
            'materijal'=>'materijal2',
            'cena'=>'2500',
            'oblik'=>'krug2'
        ],[
            'model'=>'model3',
            'opis'=>'opis3',
            'materijal'=>'materijal3',
            'cena'=>'25001',
            'oblik'=>'krug3'
        ],[
            'model'=>'model4',
            'opis'=>'opis4',
            'materijal'=>'materijal4',
            'cena'=>'25001',
            'oblik'=>'krug4'
        ],[
            'model'=>'model5',
            'opis'=>'opis5',
            'materijal'=>'materijal5',
            'cena'=>'25001',
            'oblik'=>'krug5'
        ]
    ]);
    }
}
