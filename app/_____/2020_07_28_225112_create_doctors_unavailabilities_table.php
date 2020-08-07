<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsUnavailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_unavailabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->unsigned()->unique();
            $table->unsignedBigInteger('slot_id');

            $table->unsignedInteger('unavilability_date');

            $table->timestamps();
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('slot_id')->references('id')->on('doctors_availabilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors_unavailabilities');
    }
}
