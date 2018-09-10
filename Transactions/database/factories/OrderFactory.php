<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'id'->$faker->increment,
        'supplier id'->$faker->unsignedInteger,
                ];
});
