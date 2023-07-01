<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('confirm_password');
            $table->unsignedBigInteger('role_id'); // Foreign key column
            $table->string('img_profile')->nullable();
            $table->string('img_cover')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop foreign key constraint before dropping the table
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('users');
    }
}
