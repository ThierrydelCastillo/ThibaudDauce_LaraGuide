@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-l">{{ $utilisateur->email }}</h1>
    </div>

    @if (auth()->check() AND auth()->user()->id === $utilisateur->id)
        <form action="/messages" method="post">
            {{ csrf_field() }}

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea name="message" class="textarea" placeholder="Qu'avez-vous à dire ?"></textarea>
                </div>
                @if($errors->has('message'))
                    <p class="help is-danger">{{ $errors->first('message') }}</p>
                @endif

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Publier</button>
                    </div>
                </div>
            </div>
        </form>
    @endif

    @foreach ($messages as $message)
        <hr>
        <p>
            <strong>{{ $message->created_at}}</strong><br>
            {{ $message->contenu }}
        </p>
    @endforeach

@endsection