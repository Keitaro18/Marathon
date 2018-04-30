<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeux extends Model
{
    protected $fillable = ['idJeu','codeJeu','nomJeu','proprietaire','disponibilite'];
}
