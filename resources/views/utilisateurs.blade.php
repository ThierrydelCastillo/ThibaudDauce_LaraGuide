@extends('layout')

@section('contenu')
    <h1 class="title is-l">Les Utilisateurs</h1>

    <ul>
        @foreach ($utilisateurs as $utilisateur)
            <li>
                <a href="/{{ $utilisateur->email }}">{{ $utilisateur->email }}</a>
            </li>
        @endforeach
    </ul>
@endsection