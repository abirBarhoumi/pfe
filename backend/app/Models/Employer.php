<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $table = 'employer'; // Spécifie le nom de la table

    protected $fillable = [
        'emploi',
        'classification',
        'date_recrutement',
        'nom',
        'prenom',
        'formation_id',
        'formateur_id', // Ajoutez les champs que vous souhaitez remplir
    ];

    // Relation avec le modèle Formation
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }

    // Relation avec le modèle Formateur
    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'formateur_id');
    }
}