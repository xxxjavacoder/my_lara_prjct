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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('series');       // Наприклад: "5 Series"
            $table->string('model_code');   // Наприклад: "E39"
            $table->year('year_start');
            $table->year('year_end');
            $table->timestamps();

            $table->unique(['brand', 'series', 'model_code']); // унікальність по авто
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
