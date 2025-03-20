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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // L'utilisateur concerné
            $table->foreignId('programme_id')->constrained()->onDelete('cascade');
            $table->string('motif'); // Perte de poids, prise de masse, etc.
            $table->date('date_debut'); // Date de début du programme
            $table->date('date_fin'); // Date de fin du programme
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
