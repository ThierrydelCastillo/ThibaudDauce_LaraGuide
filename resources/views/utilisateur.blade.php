@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-l">{{ $utilisateur->email }}</h1>
    </div>
@endsection