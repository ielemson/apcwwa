<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardCoordinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_coordinators', function (Blueprint $table) {
            $table->id();
            $table->string('cordname');
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
        Schema::dropIfExists('ward_coordinators');
    }
}
