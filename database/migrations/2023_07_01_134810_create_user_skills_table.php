<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSkillsTable extends Migration
{
    public function up()
    {
        Schema::create('user_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('skill_id')->constrained('skills', 'skill_id'); // Specify the column name for the referenced key
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_skills');
    }
}
