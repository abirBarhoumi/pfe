@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter des données à RH_CLSB</h1>
    <form action="{{ route('rh_clsb.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" name="Nom" id="Nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Prenom">Prénom</label>
            <input type="text" name="Prenom" id="Prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection