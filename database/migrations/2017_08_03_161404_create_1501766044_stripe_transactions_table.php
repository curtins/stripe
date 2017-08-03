<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1501766044StripeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('stripe_transactions')) {
            Schema::create('stripe_transactions', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('transaction_user_id')->unsigned()->nullable();
                $table->foreign('transaction_user_id', '59160_5983219cc7a57')->references('id')->on('users')->onDelete('cascade');
                $table->decimal('amount', 15, 2)->nullable();
                
                $table->timestamps();
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stripe_transactions');
    }
}
