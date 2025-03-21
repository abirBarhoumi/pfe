@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un employé</h1>
    <form action="{{ route('employer.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="emploi">Emploi</label>
            <input type="text" name="emploi" id="emploi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="classification">Classification</label>
            <input type="text" name="classification" id="classification" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_recrutement">Date de recrutement</label>
            <input type="date" name="date_recrutement" id="date_recrutement" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="formation_id">Formation</label>
            <select name="formation_id" id="formation_id" class="form-control" required>
                @foreach($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->titre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="formateur_id">Formateur</label>
            <select name="formateur_id" id="formateur_id" class="form-control" required>
                @foreach($formateurs as $formateur)
                    <option value="{{ $formateur->id }}">{{ $formateur->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection