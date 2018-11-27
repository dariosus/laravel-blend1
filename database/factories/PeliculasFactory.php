<?php

use Faker\Generator as Faker;

$factory->define(\App\Pelicula::class, function (Faker $faker) {
    $generos = \App\Genero::all();

    return [
        "title" => $faker->catchPhrase,
        "awards" => $faker->numberBetween(0, 25),
        "release_date" => $faker->datetime(),
        "rating" => $faker->randomFloat(null, 0,10),
        "length" => $faker->numberBetween(90, 200),
        "genre_id" => $generos->shuffle()[0]->id
    ];
});
