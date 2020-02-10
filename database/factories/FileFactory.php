<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Root\File;
use Faker\Generator as Faker;

$factory->define(\App\Models\Root\File::class, function (Faker $faker) {
    return [
        "nome" => $faker->text,
        "mime" => $faker->mimeType,
        "path" => $faker->text,
        "tamanho" => $faker->randomNumber(2)
    ];
});
