<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('order_item_id');

            $table->integer('customer_id')->unsigned();
         //  $table->foreign('customer_id')->references('customer_id')->on('coustomers')-> onDelete('cascade');
           
            $table->integer('foodItem_id')->unsigned();
           // $table->foreign('foodItem_id')->references('foodItem_id')->on('food_items')->onDelete('cascade');
            
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
        Schema::dropIfExists('order_items');
    }
}
