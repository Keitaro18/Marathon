<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function create()
    {
        return view('Joueur/inscription');
    }

    public function store()
    {
        
    }
}
