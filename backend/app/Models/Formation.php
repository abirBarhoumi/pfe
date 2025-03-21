<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'formation'; // Spécifie le nom de la table

    protected $fillable = [
        'titre',
        'date',
        'formateur_id',
        'employer_id', // Ajoutez les champs que vous souhaitez remplir
    ];

    // Relation avec le modèle Formateur
    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'formateur_id');
    }

    // Relation avec le modèle Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }
}
