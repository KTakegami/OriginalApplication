<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Provider\DateTime;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthday' => DateTime::dateTimeThisDecade()->format('Y-m-d'),
        'question' => $faker->sentence(5),
        'answer' => $faker->sentence(1),
        'email' =>$faker->unique()->safeEmail,
        'password' => \Hash::make('password'),
        ];
});
