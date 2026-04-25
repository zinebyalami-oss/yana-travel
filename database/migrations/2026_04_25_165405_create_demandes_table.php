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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->date('dateDemande');
            $table->string('nomComplet');
            $table->string('numTel');

            $table->string('client_id');
            $table->foreign('client_id')->references('CIN')->on('clients')->onDelete('cascade');

            $table->foreignId('voyage_id')
                          ->constrained('voyages')
                          ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
