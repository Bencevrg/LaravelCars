<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('reg_plate');
            $table->string('vin');
            $table->unsignedBigInteger('makers_id');
            $table->foreign('makers_id')->references('id')->on('makers');
            $table->unsignedBigInteger('models_id');
            $table->foreign('models_id')->references('id')->on('models');
            $table->unsignedBigInteger('bodies_id');
            $table->foreign('bodies_id')->references('id')->on('bodies');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
