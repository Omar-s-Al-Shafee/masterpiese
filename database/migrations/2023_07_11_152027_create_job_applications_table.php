<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('job_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('pdf_cv')->nullable();
            $table->timestamps();

            $table->foreign('company_id')->references('company_id')->on('companies');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('job_id')->references('job_id')->on('jops_listings');
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
