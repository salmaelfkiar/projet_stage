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
        Schema::create('etudiantfiliere', function (Blueprint $table) {
            $table->id();
            $table->integer('classement');
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('etudiant_id')->references('id')->on('etudiant');
            $table->foreign('filiere_id')->references('id')->on('filiere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiantfiliere');
    }
};
