<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Utilisateur;
use Hamcrest\Util;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/bonjour/{nom}', function () {
    return view('bonjour', [
        'prenom' => request('nom'),
    ]);
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', function () {
    request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
    ], [
        'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.',
    ]);

    $utilisateur = App\Utilisateur::create([
        'email' => request('email'),
        'mot_de_passe' => bcrypt(request('password')),
    ]);

    return 'Nous avons reçu votre email qui est ' . request('email') . ' et votre mot de passe est ' . request('password');
});

Route::get('/utilisateurs', function () {
    $utilisateurs = Utilisateur::all();

    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs,
    ]);
});
