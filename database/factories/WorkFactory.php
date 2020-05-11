<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Work;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Work::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'user_id' => User::first()->id,
    ];
});
