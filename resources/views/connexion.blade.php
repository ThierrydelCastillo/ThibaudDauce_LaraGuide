@extends('layout')

@section('contenu')
    <form action="/connexion" method="post" class="section">
        @csrf

        <div class="field">
            <label class="label">Adresse email</label>
            <div class="control">
                <input class="input" type="email" name="email" value="{{ old('email')}}">
            </div>
            @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Se connecter</button>
            </div>
        </div>
    </form>
@endsection