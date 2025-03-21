<?php

use App\Http\Controllers\AdminController;

// Route pour afficher le formulaire d'ajout d'administrateur
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

// Route pour enregistrer un nouvel administrateur
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

//les routes pour RH_clsb
use App\Http\Controllers\RhClsbController;

// Route pour afficher le formulaire d'ajout
Route::get('/rh_clsb/create', [RhClsbController::class, 'create'])->name('rh_clsb.create');

// Route pour enregistrer les données
Route::post('/rh_clsb/store', [RhClsbController::class, 'store'])->name('rh_clsb.store');

//les routes pour les formations
use App\Http\Controllers\FormationController;

// Route pour afficher le formulaire d'ajout
Route::get('/formation/create', [FormationController::class, 'create'])->name('formation.create');

// Route pour enregistrer les données
Route::post('/formation/store', [FormationController::class, 'store'])->name('formation.store');

//Route pour les formateur
use App\Http\Controllers\FormateurController;

// Route pour afficher le formulaire d'ajout
Route::get('/formateur/create', [FormateurController::class, 'create'])->name('formateur.create');

// Route pour enregistrer les données
Route::post('/formateur/store', [FormateurController::class, 'store'])->name('formateur.store');

//Route pour employer
use App\Http\Controllers\EmployerController;

// Route pour afficher le formulaire d'ajout
Route::get('/employer/create', [EmployerController::class, 'create'])->name('employer.create');

// Route pour enregistrer les données
Route::post('/employer/store', [EmployerController::class, 'store'])->name('employer.store');