<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formation', function (Blueprint $table) {
            $table->id(); // Colonne ID auto-incrémentée
            $table->string('titre'); // Champ Titre
            $table->date('date'); // Champ Date
            $table->unsignedBigInteger('formateur_id'); // Clé étrangère pour Formateur
            $table->unsignedBigInteger('employer_id'); // Clé étrangère pour Employer
            $table->timestamps(); // Colonnes created_at et updated_at

            // Définir les clés étrangères
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation');
    }
}