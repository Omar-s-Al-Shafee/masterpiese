<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMajorIdToCompanyTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Add other columns to the 'company' table here
            
            // Add the 'major_id' column
            $table->unsignedBigInteger('major_id')->nullable();

            // Add the foreign key constraint
            $table->foreign('major_id')->references('id')->on('majors');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
}
