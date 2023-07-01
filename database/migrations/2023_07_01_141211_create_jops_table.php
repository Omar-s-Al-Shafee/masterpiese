<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJopsTable extends Migration


{
    public function up()
    {
        Schema::create('jops_listings', function (Blueprint $table) {
            $table->id('job_id');
            $table->unsignedBigInteger('company_id')->constrained('companies', 'company_id');
            $table->string('job_title');
            $table->string('location');
            $table->text('job_description');
            $table->string('salary');
            $table->string('joptype');
            $table->string('experiense');
            $table->string('onsite/remote');
            $table->string('image')->nullable();
            $table->date('application_deadline');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_listings');
    }
}


