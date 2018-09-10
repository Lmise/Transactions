<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'id'->$faker->increment,
        'delivery id'->$faker->unsignedInteger,
        'delivery_date'-> $faker->date(),
    ];
});
