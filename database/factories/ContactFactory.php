<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Contact\Contact::class ,function (Faker $faker) {
    $file =  factory(\App\Models\Root\File::class)->create();

    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'telefone' => $faker->phoneNumber,
        'mensagem' => $faker->text,
        'file' => $file->id,
        'visitante' => $faker->ipv4
    ];
});
