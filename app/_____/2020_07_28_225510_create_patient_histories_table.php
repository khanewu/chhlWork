<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedInteger('appointment_id')->unsigned();

            $table->longText('symptoms_details');
            $table->string('prescription_pic');


            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('appointment_id')->references('id')->on('appointments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_histories');
    }
}
