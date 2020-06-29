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

        DB::table('transactions')
            ->insert([
                'ts_ref_id' => 1,
                'ref_transaction_type' => "purchase",
                'customer_ref_code' => 004,
                'amount' => 20000,
                'interest' => "coding",
                'total_amount' => "54000",
                'expected_pay_date' => $faker->date,
                'user_ref_id' => 1,
                'store_ref_id' => 1
            ]);
    }
}
