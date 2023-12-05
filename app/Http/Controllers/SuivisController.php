<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use Illuminate\Http\Request;

class SuivisController extends Controller
{
    public function nouveau()
    {
        $utilisateurQuiVaSuivre = auth()->user();
        $utilisateurQuiVaEtreSuivi = Utilisateur::where('email', request('email'))->firstOrFail();
        $utilisateurQuiVaSuivre->suivis()->attach($utilisateurQuiVaEtreSuivi);

        flash("Vous suivez maintenant {$utilisateurQuiVaEtreSuivi->email}")->success();
        return back();
    }
}
