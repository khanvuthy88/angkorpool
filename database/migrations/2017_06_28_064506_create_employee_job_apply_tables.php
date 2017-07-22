<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeJobApplyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_job_applies', function (Blueprint $table) {
            $table->integer('employee_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->timestamp('applied_date')->useCurrent();

            $table->primary(['employee_id', 'job_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_job_applies');
    }
}
