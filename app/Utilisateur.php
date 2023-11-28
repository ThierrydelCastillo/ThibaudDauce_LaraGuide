<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;  //Class renomée car même nom que l'autre class.

class Utilisateur extends Model implements Authenticatable {

    use BasicAuthenticatable;

    protected $fillable = ['email', 'mot_de_passe'];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
}