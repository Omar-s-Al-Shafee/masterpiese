<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id('company_id');
            $table->string('company_name');
            $table->string('industry');
            $table->string('headquarters');
            $table->integer('founded_year');
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('role_id'); // Foreign key column
            $table->string('img_profile')->nullable();
            $table->string('img_cover')->nullable();
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            // Drop foreign key constraint before dropping the table
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('companies');
    }
}
