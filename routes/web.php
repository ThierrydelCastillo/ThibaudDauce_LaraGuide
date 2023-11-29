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

Route::view('/', 'welcome');

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/utilisateurs', 'UtilisateursController@liste');

Route::get('/mon-compte', 'CompteController@accueil');
Route::get('/deconnexion', 'CompteController@deconnexion');
Route::post('/modification-mot-de-passe', 'CompteController@modificationMotDePasse');
