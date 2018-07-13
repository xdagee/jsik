<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceOfBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_of_births', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',125)->nullable(false);
            $table->unsignedInteger('town_id')->nullable(false);
            $table->timestamps();

            $table->foreign('town_id')->references('id')->on('towns')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('place_of_births');
    }
}
