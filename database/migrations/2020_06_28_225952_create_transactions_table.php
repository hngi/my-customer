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
            $table->foreign('customer_ref_code')->references('customer_ref_id')->on('customers');
            $table->string('amount');
            $table->string('interest');
            $table->string('total_amount');
            $table->string('expected_pay_date');
            $table->foreign('user_ref_id')->references('id')->on('users');
            $table->foreign('store_ref_id')->references('store_ref_id')->on('stores');
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
