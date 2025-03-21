<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateurTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formateur', function (Blueprint $table) {
            $table->id(); // Colonne ID auto-incrémentée
            $table->string('emploi'); // Champ Emploi
            $table->string('classification'); // Champ Classification
            $table->date('date_recrutement'); // Champ Date de recrutement
            $table->string('nom'); // Champ Nom
            $table->string('prenom'); // Champ Prénom
            $table->unsignedBigInteger('employer_id'); // Clé étrangère pour Employer
            $table->unsignedBigInteger('formation_id'); // Clé étrangère pour Formation
            $table->timestamps(); // Colonnes created_at et updated_at

            // Définir les clés étrangères
            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateur');
    }
}