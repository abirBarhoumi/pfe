<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $table = 'formateur'; // Spécifie le nom de la table

    protected $fillable = [
        'emploi',
        'classification',
        'date_recrutement',
        'nom',
        'prenom',
        'employer_id',
        'formation_id', // Ajoutez les champs que vous souhaitez remplir
    ];

    // Relation avec le modèle Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    // Relation avec le modèle Formation
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }
}