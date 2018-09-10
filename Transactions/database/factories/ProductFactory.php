<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'id'->$faker->increment,
        'order_date'-> $faker->date(),
        'order_detail_id'->$faker->unsignedInteger,
        'delivery_id'->$faker->unsignedInteger,
        'headquarter_id'->$faker->unsignedInteger,
        'Branch_id'->$faker->unsignedInteger,
        'Product_id'->$faker->unsignedInteger,
        'Product_quantity'->$faker->unsignedInteger,
    ];
});
