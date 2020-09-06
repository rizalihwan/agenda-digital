<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agenda;
use Faker\Generator as Faker;

$factory->define(Agenda::class, function (Faker $faker) {
    return [
        'judul_agenda' => $faker->sentence(),
        'slug' => \Str::slug($faker->sentence()),
        'description' => $faker->sentence()
    ];
});
