<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    protected $fillable = ['idJeu','codeJeu','nomJeu','proprietaire','disponibilite'];
}