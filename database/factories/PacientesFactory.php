<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Pacientes::class, function (Faker $faker) {
    return [
        'nome' => $faker->name
    ];
});
