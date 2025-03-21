<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClsb extends Model
{
    use HasFactory;
    public $timestamps = true; // Active les timestamps automatiques
    
    protected $table = 'RH_CLSB'; // Spécifie le nom de la table

    protected $fillable = [
        'Nom',
        'Prenom',
        'Email', // Ajoutez les champs que vous souhaitez remplir
    ];
}