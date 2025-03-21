<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('formation.create');
    }

    // Enregistrer les données
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'date' => 'required|date',
            'formateur_id' => 'required|exists:formateurs,id',
            'employer_id' => 'required|exists:employers,id',
        ]);

        // Création d'une nouvelle entrée dans la table Formation
        Formation::create([
            'titre' => $request->titre,
            'date' => $request->date,
            'formateur_id' => $request->formateur_id,
            'employer_id' => $request->employer_id,
        ]);

        // Redirection avec un message de succès
        return redirect()->route('formation.create')->with('success', 'Formation ajoutée avec succès !');
    }
}