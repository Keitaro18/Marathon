<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
   public function create()
   {
       return view('accueil');
   }

   public function store()
   {
       $user = DB::table('Joueurs')->get();
       $code = request('code');

       if($code >= 100000 AND $code <= 101000)
       {
           return view('Joueur.inscription');
       }
       if($code == 407407)
       {
            return view('Admin.BDD');
       }
       else
       {
            return view('Error.error');
       }
   }
}
