@extends('Layouts.masterJoueur')

@section('contenuJoueur')
<div class="contenu" id="infos">
    
    <p> Bienvenue , pour commencer le Marathon veuillez scanner votre carte !</p>
    
    <form method="POST" action="" accept-charset="UTF-8">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <input type="text" class="form-control" name="code" maxlength="6" placeholder="Scanner votre carte">
        
        <input class="btn btn-danger" data-toggle="modal" data-target="#infos" type="submit"></button>
        
    </form> 

</div>  
    @stop