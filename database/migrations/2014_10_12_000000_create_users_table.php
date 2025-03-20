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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->double('poids')->nullable();
            $table->double('taille')->nullable();
            $table->integer('age')->nullable();
            $table->string('sexe')->nullable();
            $table->enum('etat', ['diabetique', 'hypertendu', 'normal', 'autres']);
            $table->string('objectif')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default('unlock');
            $table->string('role')->default('client');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
