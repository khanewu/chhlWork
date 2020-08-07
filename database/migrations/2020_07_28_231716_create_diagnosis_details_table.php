<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('instructions');
            $table->longText('details');
            $table->string('mechine_pic');
            $table->string('room_no');
            $table->string('fees');
            $table->string('maxDiscount');

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
        Schema::dropIfExists('diagnosis_details');
    }
}
