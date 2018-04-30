<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddJeuxController extends Controller
{
    public function create()
    {
        return view('Admin.AddJeux');
    }

    public function store()
    {
        
    }
}
