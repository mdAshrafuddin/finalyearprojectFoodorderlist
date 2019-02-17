<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('coustomer_meassage');
            $table->string('order_status');
            $table->double('payment');
            $table->string('payment_type');

            $table->integer('customer_id')->unsigned();
            // $table->foreign('customer_id')->references('customer_id')->on('coustomers')-> onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
