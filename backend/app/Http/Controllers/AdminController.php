<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Afficher le formulaire d'ajout d'administrateur
    public function create()
    {
        return view('admin.create');
    }

    // Enregistrer un nouvel administrateur
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création de l'administrateur
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true, // Marquer l'utilisateur comme administrateur
        ]);

        // Redirection avec un message de succès
        return redirect()->route('admin.dashboard')->with('success', 'Administrateur ajouté avec succès !');
    }
}
