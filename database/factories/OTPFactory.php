<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\OTP;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(OTP::class, function (Faker $faker) {
    return [
        'user_ref_code' => $faker->randomDigit,
        'otp_code' => $faker->randomNumber(6, $strict = false),
    ];
});
