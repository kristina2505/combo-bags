<?php

use Illuminate\Database\Seeder;

class KupovinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kupovinas')->insert([[
            'ime'=> 'Pera',
            'prezime'=> 'Peric',
            'Torbica'=> 1,
            'email'=> 'pera@gmail.com'
        ],[
            'ime'=> 'Ana',
            'prezime'=> 'Simic',
            'Torbica'=> 12,
            'email'=> 'ana@gmail.com'
        ],[
            'ime'=> 'Kristina',
            'prezime'=> 'Cvetinovic',
            'Torbica'=> 3,
            'email'=> 'kc@gmail.com'
        ],[
            'ime'=> 'Ana',
            'prezime'=> 'Mijic',
            'Torbica'=> 4,
            'email'=> 'mijic@gmail.com'
        ],[
            'ime'=> 'Marko',
            'prezime'=> 'Markovic',
            'Torbica'=> 5,
            'email'=> 'mm@gmail.com'
        ]
    ]);
    }
}
