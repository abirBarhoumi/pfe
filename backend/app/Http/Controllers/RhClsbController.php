<?php

namespace App\Http\Controllers;

use App\Models\RhClsb;
use Illuminate\Http\Request;

class RhClsbController extends Controller
{
    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('rh_clsb.create');
    }

    // Enregistrer les données
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'Nom' => 'required|string|max:255',
            'Prenom' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:RH_CLSB',
        ]);

        // Création d'une nouvelle entrée dans la table RH_CLSB
        RhClsb::create([
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'Email' => $request->Email,
        ]);

        // Redirection avec un message de succès
        return redirect()->route('rh_clsb.dashboard')->with('success', 'Données ajoutées avec succès !');
    }
}