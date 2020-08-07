<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_availabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->unsigned()->unique();
            $table->enum('available_day',['0','1','2','3','4','5','6']); //0=fri,1=sat,2,3,4,5,6=thr,
            $table->string('available_hours_start'); //timestampStart
            $table->string('available_hours_end'); //timestampEnd
            $table->timestamps();
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors_availabilities');
    }
}
