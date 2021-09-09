<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Torbica;
use Faker\Generator as Faker;

$factory->define(Torbica::class, function (Faker $faker) {
    return [
        'model'=>$this->faker->firstName($gender = 'male'),
        'opis'=>$this->faker->realText($maxNbChars = 50, $indexSize = 2),
        'materijal'=>$this->faker->word(),
        'cena'=>$this->faker->numberBetween($min = 1000, $max = 6500),
        'oblik'=>$this->faker->word()
    ];
});
