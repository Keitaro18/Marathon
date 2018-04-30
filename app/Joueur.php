<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    protected $fillable = ['idJoueur','nom','prenom','mail','dateNaissance','dateArrivee','dernierPassage'];
}
