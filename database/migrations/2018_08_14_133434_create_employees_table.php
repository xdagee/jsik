<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',125)->nullable(false);
            $table->string('lastname',125)->nullable(false);
            $table->string('othername',125)->nullable();
            $table->date('dob')->nullable(false);
            $table->boolean('gender')->nullable(false)->default(true);
            $table->integer('years_at_workplace')->nullable(false)->default(0);
            $table->string('work_place',125)->nullable();
            $table->unsignedInteger('years_at_residence')->nullable(false)->default(0);
            $table->unsignedInteger('residence_id')->nullable(false);
            $table->unsignedInteger('place_of_birth_id')->nullable(false);
            $table->unsignedInteger('education_level_id')->nullable(false);
            $table->unsignedInteger('religion_id')->nullable(false);
            $table->unsignedInteger('ethnicity_id')->nullable(false);
            $table->timestamps();

            $table->foreign('residence_id')->references('id')->on('residences')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('place_of_birth_id')->references('id')->on('place_of_births')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('education_level_id')->references('id')->on('education_levels')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('ethnicity_id')->references('id')->on('ethnicities')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('employees');
    }
}
