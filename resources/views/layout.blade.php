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
                    @include('partials.navbar-item', ['lien' => '/', 'texte' => 'Accueil'])
                    @auth
                        @include('partials.navbar-item', ['lien' => auth()->user()->email, 'texte' => auth()->user()->email])
                    @endauth
                </div>
                <div class="navbar-end">
                    @auth
                        @include('partials.navbar-item', ['lien' => '/mon-compte', 'texte' => 'Mon compte'])
                        @include('partials.navbar-item', ['lien' => '/deconnexion', 'texte' => 'Déconnexion'])
                    @else
                        @include('partials.navbar-item', ['lien' => '/connexion', 'texte' => 'Connexion'])
                        @include('partials.navbar-item', ['lien' => '/inscription', 'texte' => 'Inscription'])
                    @endauth
                </div>
            </div>
        </nav>
        <div class="container">
            @include('flash::message')
            
            @yield('contenu')
        </div>
    </body>
</html>
