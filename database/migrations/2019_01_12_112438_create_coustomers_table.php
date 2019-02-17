<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coustomers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('coustomerName');
            $table->string('coustomerEmail');
            $table->integer('coustomerNumber');
            $table->string('coustomerAddress');
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
        Schema::dropIfExists('coustomers');
    }
}
