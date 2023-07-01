<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectionTable extends Migration
{
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->id('connection_id');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('connected_user_id')->constrained('users');
            $table->string('connection_type');
            $table->timestamp('date_connected')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('connections');
    }
}
