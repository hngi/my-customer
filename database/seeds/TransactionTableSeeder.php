<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('transactions')->insert([
            'ts_ref_id' => "TS001B",
            'ref_transaction_type' => "purchase",
            'customer_ref_code' => "MC001D",
            'amount' => 20000,
            'interest' => "coding",
            'total_amount' => "54000",
            'expected_pay_date' => $faker->date,
            'user_ref_id' => 1,
            'store_ref_id' => 1
        ]);

        DB::table('transactions')->insert([
            'ts_ref_id' => "TS002B",
            'ref_transaction_type' => "purchase",
            'customer_ref_code' => "MC002D",
            'amount' => 20000,
            'interest' => "coding",
            'total_amount' => "54000",
            'expected_pay_date' => $faker->date,
            'user_ref_id' => 1,
            'store_ref_id' => 1
        ]);

        DB::table('transactions')->insert([
            'ts_ref_id' => "TS003B",
            'ref_transaction_type' => "purchase",
            'customer_ref_code' => "MC003D",
            'amount' => 20000,
            'interest' => "coding",
            'total_amount' => "54000",
            'expected_pay_date' => $faker->date,
            'user_ref_id' => 1,
            'store_ref_id' => 1
        ]);

    }
}
