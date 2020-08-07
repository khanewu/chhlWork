<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->unsigned()->unique();
            $table->unsignedBigInteger('slot_id');

            $table->unsignedInteger('appoint_date');
            $table->unsignedInteger('total_appointee');
            $table->string('appointees_list')->default(',');//',user1,user2,user3,.....'
            $table->enum('appoint_status',['0','1'])->default('0');//'0=yet not show doctor 1=doctor visitation completed'
            // $table->string('next_visitation');
            // $table->string('next_visitation');

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
        Schema::dropIfExists('appointments');
    }
}
