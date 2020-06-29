<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
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

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'ts_ref_id' => "MC001B",
        'ref_transaction_type' => "purchase",
        'customer_ref_code' => 004,
        'amount' => 20000,
        'interest' => "coding",
        'total_amount' => "54000",
        'expected_pay_date' => $faker->date,
        'user_ref_id' => 1,
        'store_ref_id' => 1
    ];
});
