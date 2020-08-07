<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolledServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolled_services', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedInteger('service_id')->unsigned();

            $table->longText('symptoms_details');
            $table->string('prescription_pic');
            $table->string('start_timestamp');
            $table->string('end_timestamp');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('clinical_services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolled_services');
    }
}
