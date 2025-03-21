<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('RH_CLSB', function (Blueprint $table) {
        $table->id(); // Colonne ID auto-incrémentée
        $table->string('Nom'); // Champ Nom
        $table->string('Prenom'); // Champ Prenom
        $table->string('Email')->unique(); // Champ Email (unique)
        $table->timestamps(); // Colonnes created_at et updated_at
    });
}

public function down()
{
    Schema::dropIfExists('RH_CLSB'); // Supprime la table si la migration est annulée
}
};
