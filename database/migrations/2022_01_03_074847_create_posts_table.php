<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title', 255);
            $table->string('post_slug', 255);
            $table->text('post_body');
            $table->string('featured_image');
            $table->enum('event_status', ['upcoming','past','dnc'])->default('upcoming');
            $table->boolean('status')->default(0);
            $table->foreignId('category_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->foreignId('user_id')
                    ->constrained()
                    ->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
