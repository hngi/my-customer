<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('ts_ref_id');
            $table->string('ref_transaction_type');
            $table->string('customer_ref_code');
            $table->string('amount');
            $table->string('interest');
            $table->string('total_amount');
            $table->dateTime('expected_pay_date');
            $table->string('user_ref_id');
            $table->string('store_ref_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
