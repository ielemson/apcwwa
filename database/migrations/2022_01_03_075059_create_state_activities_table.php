<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_activities', function (Blueprint $table) {

            $table->id();
            $table->string('event_title',255);
            $table->string('event_slug',255);
            $table->text('event_body');
            $table->string('featured_image');
            $table->boolean('status')->default(0);
            $table->foreignId('state_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->foreignId('lga_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->foreignId('ward_id')
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
        Schema::dropIfExists('state_activities');
    }
}
