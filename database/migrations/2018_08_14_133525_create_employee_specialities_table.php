<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_specialities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id')->nullable(false);
            $table->unsignedInteger('speciality_id')->nullable(false);
            $table->unsignedInteger('years_of_experience')->nullable(false)->default(0);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('speciality_id')->references('id')->on('specialities')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('employee_specialities');
    }
}
