<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('university_id');
            $table->string('degree');
            $table->string('field_of_study');
            $table->integer('graduation_year');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('educations', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['university_id']);
        });

        Schema::dropIfExists('educations');
    }
}
