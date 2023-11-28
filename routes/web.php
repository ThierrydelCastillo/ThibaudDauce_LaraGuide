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
    $utilisateur = App\Utilisateur::create([
        'email' => request('email'),
        'mot_de_passe' => bcrypt(request('password')),
    ]);

    return 'Nous avons reçu votre email qui est ' . request('email') . ' et votre mot de passe est ' . request('password');
});