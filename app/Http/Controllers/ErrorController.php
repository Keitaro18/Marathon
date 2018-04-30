<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function create()
    {
        return view('Error/error');
    }

    public function store()
    {
        $error = request('error');

        if($error)
        {
            return view('accueil');
        }
    }
}
