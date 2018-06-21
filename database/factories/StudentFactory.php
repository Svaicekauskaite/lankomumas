<?php

use Faker\Generator as Faker;
use App\Student;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName, 
        'class' => $faker->bothify('#?'),
        'school' => $faker->word,
    ];
});
