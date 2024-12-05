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
        Schema::create('confrences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title'); // Antraštė
            $table->text('text');   // Aprašas
            $table->date('date'); // Konferencijos data
            $table->string('adress'); // Adresas
            $table->integer('participant_number');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confrences');
    }
};
