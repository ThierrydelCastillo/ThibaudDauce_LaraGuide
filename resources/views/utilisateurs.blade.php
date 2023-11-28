@extends('layout')

@section('contenu')
    <h1>Les Utilisateurs</h1>

    <ul>
        @foreach ($utilisateurs as $utilisateur)
            <li>{{ $utilisateur->email }}</li>
        @endforeach
    </ul>
@endsection