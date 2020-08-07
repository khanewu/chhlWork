<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned()->unique();
            $table->unsignedBigInteger('diagnosis_id');

            $table->unsignedInteger('appoint_date');
            $table->string('pic');
            $table->enum('status',['0','1']);
            $table->mediumText('details');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('userss');
            $table->foreign('diagnosis_id')->references('id')->on('diagnosis_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnostic_reports');
    }
}
