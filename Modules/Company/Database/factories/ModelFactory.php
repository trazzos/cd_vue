<?php

use Modules\Company\Models\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    return [];
});

$factory->defineAs(User::class, 'unit', function (Faker\Generator $faker) {
    return [
        'id' => 1,
    ];
});
