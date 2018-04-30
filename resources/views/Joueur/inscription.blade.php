@extends('Layouts.masterJoueur')


@section('contenuJoueur')
<div class= "formulaire"><p>Inscription</p>
    <label name="fname" id= "nom"> 
        </label><br>
           <input type="text"  id="prenom"placeholder="nom"> 
           
    <label name="fsurname"id="prenom"> 
    </label><br>
           <input type="text" placeholder="prenom"> 
           
    
    <label name="fdate"id ="date"> 
        </label><br>
           <input type="date" placeholder="date de naissance" > 
           
    <label name="fmail"id ="mail"> 
     </label><br>
       <input type="text" placeholder="email"> <br>
       <input class="valider btn btn-danger" type="submit" >
    </div>
@stop
