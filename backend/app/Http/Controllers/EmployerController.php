<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Formation;
use App\Models\Formateur;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    // Afficher le formulaire d'ajout
    public function create()
    {
        // Récupérer tous les formateurs et formations depuis la base de données
        $formateurs = Formateur::all(); // Récupère tous les formateurs
        $formations = Formation::all(); // Récupère toutes les formations
    
        // Passer les données à la vue
        return view('employer.create', [
            'formateurs' => $formateurs,
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
            'formation_id' => 'required|exists:formations,id',
            'formateur_id' => 'required|exists:formateurs,id',
        ]);

        // Création d'une nouvelle entrée dans la table Employer
        Employer::create([
            'emploi' => $request->emploi,
            'classification' => $request->classification,
            'date_recrutement' => $request->date_recrutement,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'formation_id' => $request->formation_id,
            'formateur_id' => $request->formateur_id,
        ]);

        // Redirection avec un message de succès
        return redirect()->route('employer.create')->with('success', 'Employer ajouté avec succès !');
    }
}