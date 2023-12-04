<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <nav class="navbar is-light">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a href="/" class="navbar-item {{ request()->is('/') ? 'is-active' : ''}}">Accueil</a>
                </div>
                <div class="navbar-end">
                    @if(auth()->check())
                        <a href="/mon-compte" class="navbar-item {{ request()->is('mon-compte') ? 'is-active' : ''}}">Mon compte</a>
                        <a href="/deconnexion" class="navbar-item">Déconnexion</a>
                    @else 
                        <a href="/connexion" class="navbar-item {{ request()->is('connexion') ? 'is-active' : ''}}">Connexion</a>
                        <a href="/inscription" class="navbar-item {{ request()->is('inscription') ? 'is-active' : ''}}">Inscription</a>
                    @endif
                </div>
            </div>
        </nav>
        <div class="container">
            @include('flash::message')
            
            @yield('contenu')
        </div>
    </body>
</html>
