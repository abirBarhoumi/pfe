@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une formation</h1>
    <form action="{{ route('formation.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="formateur_id">Formateur</label>
            <select name="formateur_id" id="formateur_id" class="form-control" required>
                @foreach($formateurs as $formateur)
                    <option value="{{ $formateur->id }}">{{ $formateur->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="employer_id">Employé</label>
            <select name="employer_id" id="employer_id" class="form-control" required>
                @foreach($employers as $employer)
                    <option value="{{ $employer->id }}">{{ $employer->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection