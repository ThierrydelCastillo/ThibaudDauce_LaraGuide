<?php

namespace App\Http\Controllers;

class CompteController extends Controller
{
    public function accueil()
    {
        return view('mon-compte');
    }

    public function deconnexion()
    {
        auth()->logout();
        
        flash("Vous êtes maintenant déconnecté")->success();

        return redirect('/');
    }

    public function modificationMotDePasse()
    {
        request()->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        // $utilisateur = auth()->user();
        // $utilisateur->mot_de_passe = bcrypt(request('password'));
        // $utilisateur->save();
        auth()->user()->update([
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        flash("Votre mot de passe à bien été mis à jour.")->success();

        return redirect('/mon-compte');
    }
}
