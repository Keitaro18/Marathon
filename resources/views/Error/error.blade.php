@extends('Layouts.masterJoueur')

@section('contenuError')
<div class="error">
    <p> Code joueur non valide !

    <form>
        <input type="submit" name="error">
    </form>
</div>
@stop