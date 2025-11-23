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
        Schema::create('car_generations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('power');
            $table->year('year');
            $table->integer('seat_quantity');
            $table->float('cost_per_day');
            $table->foreignId('status_id')->constrained();
            $table->foreignId('car_model_id')->constrained();
            $table->foreignId('gear_id')->constrained();
            $table->foreignId('fuel_id')->constrained();
            $table->foreignId('wheel_id')->constrained();
            $table->foreignId('transmission_id')->constrained();
            $table->foreignId('car_case_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_generations');
    }
};
