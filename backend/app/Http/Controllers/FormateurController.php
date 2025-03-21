<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Employer;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    // Afficher le formulaire d'ajout
    public function create()
    {
        // Récupérer tous les employés et formations depuis la base de données
        $employers = Employer::all();
        $formations = Formation::all();

        // Passer les données à la vue
        return view('formateur.create', [
            'employers' => $employers,
            'formations' => $formations,
        ]);
    }

    // Enregistrer les données
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'emploi' => 'required|string|max:255',
            'classification' => 'required|string|max:255',
            'date_recrutement' => 'required|date',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'employer_id' => 'required|exists:employers,id',
            'formation_id' => 'required|exists:formations,id',
        ]);

        // Création d'une nouvelle entrée dans la table Formateur
        Formateur::create([
            'emploi' => $request->emploi,
            'classification' => $request->classification,
            'date_recrutement' => $request->date_recrutement,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'employer_id' => $request->employer_id,
            'formation_id' => $request->formation_id,
        ]);

        // Redirection avec un message de succès
        return redirect()->route('formateur.create')->with('success', 'Formateur ajouté avec succès !');
    }
}
