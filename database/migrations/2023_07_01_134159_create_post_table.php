<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id('post_id');
        $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
        $table->text('content');
        $table->string('image')->nullable();
        $table->timestamp('created_at')->useCurrent();
        $table->unsignedInteger('likes_count')->default(0);
        $table->unsignedInteger('comments_count')->default(0);
    });
}

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
