<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_items', function (Blueprint $table) {
            $table->increments('foodItem_id');
            $table->string('food_name');
            $table->text('food_description');
            $table->double('price');
            $table->string('images');
            $table->string('food_tag');

            $table->integer('subCatagoryID')->unsigned();
            $table->foreign('subCatagoryID')->references('subCatagoryID')
            ->on('sub_categories')->onDelete('cascade');

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
        Schema::dropIfExists('food_items');
    }
}
