<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('salary')->nullable();
            $table->integer('status');
            $table->string('city')->nullable();
            $table->string('province_code')->nullable();
            $table->string('work_experience')->nullable();
            $table->integer('job_type_id');
            $table->integer('number_of_positions');
            $table->timestamp('published_date')->nullable();
            $table->date('closing_date')->nullable();
            $table->integer('industry_id')->unsigned()->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
