<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodResturantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_resturants', function (Blueprint $table) {
            $table->increments('food_resturants_id');

            $table->integer('foodItem_id')->unsigned();
//$table->foreign('foodItem_id')->references('idfoodItem_id')->on('food_items')-> onDelete('cascade');
           
            $table->integer('resturant_id')->unsigned();
         //   $table->foreign('resturant_id')->references('resturant_id')->on('resturents')->onDelete('cascade');

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
        Schema::dropIfExists('food_resturants');
    }
}
