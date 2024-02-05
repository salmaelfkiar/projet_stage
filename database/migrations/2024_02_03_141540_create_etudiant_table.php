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
        Schema::create('etudiant', function (Blueprint $table) {
            $table->id();
            $table->integer('numapogee');
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->string('lieuxnaissance');
            $table->string('CIN');
            $table->string('CNE');
            $table->string('adresse')->unique;
            $table->integer('telephon');
            $table->string('email');
            $table->string('passworde');
            $table->float('moyenne');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant');
    }
};
