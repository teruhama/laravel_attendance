<?php

use App\Time;
use Faker\Generator as Faker;

$factory->define(Time::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'date' => now(),
        'input_user_id' => 1,
        'del_flg' => 0,
        'date_kind' => 1,
    ];
});
