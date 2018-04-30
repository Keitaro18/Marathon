@extends('Layouts.masterAdmin')


@section('contenuAdmin')
    <form action="" >
        {{-- <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre joueurs">
        <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre codes 1 point">
        <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre codes 3 points">
        <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre codes 5 points"> --}}
        <input type="submit" name = "createDB" value="Créer">
    </form>

    <?php 
        // if (isset($_GET['createDB'])){
        //         echo "test";
            // DB::Connection()->statement('CREATE DATABASE :schema', ['schema' => $MarathonJEU]);
            //DB::connection('mysql2')->statement(DB::raw('CREATE DATABASE MarathonJeu_2018'));
            // Artisan::call('migrate', ['--database' => 'MarathonJEU_2018']) ;
        // DB::table('Joueurs')->insert(
        // [
        //     'idJoueur' => 111111,
        //     'nom' => "NOM",
        //     'prenom' => "PRENOM",
        //     'mail' => "MAIL@MAIL.FR",
        //     'dateNaissance' => '1989-02-28',
        //     'dateArrivee' => '2018-04-24 00:00:00.000',
        //     'dernierPassage' => '2018-04-24 09:00:00.000'
        // ]
        // );

        // Nombre de joueurs
        //$count = DB::table('Joueurs')->count();

        //if ($count > 0){
           // echo "il y a des joueurs dans la BDD";
           // } 

        // $joueurs = DB::table('Joueurs')->whereNotNull('idJoueur')->get();
        // var_dump($joueurs);
        // if ($joueurs == 0 ) {
        //     echo "Aucun joueur";
        // }

    
    ?>
    @stop
