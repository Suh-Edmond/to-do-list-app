<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\User;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id'=>factory(User::class)->create(),
        'name'=>$faker->title,
        'task_date'=>$faker->date('Y-m-d'),
        'task_time'=>$faker->time('H:i:s'),
        'venue'=>$faker->address
    ];
});
