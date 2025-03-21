@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un formateur</h1>
    <form action="{{ route('formateur.store') }}" method="POST">
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
            <label for="employer_id">Employé</label>
            <select name="employer_id" id="employer_id" class="form-control" required>
                @foreach($employers as $employer)
                    <option value="{{ $employer->id }}">{{ $employer->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="formation_id">Formation</label>
            <select name="formation_id" id="formation_id" class="form-control" required>
                @foreach($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->titre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection