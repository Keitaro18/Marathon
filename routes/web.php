<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! 
|
*/
// BY JORDAN \\
//--------Dans la page d'accueil pour joueur ou admin-----
// Page d'acceuil
// include: Bienvenue + Code du joueur
Route::get('/', 'UserController@create');
Route::post('/', 'UserController@store');
//--------Les pages Joueurs-------//
// include:Inscription
Route::get('Inscription', 'InscriptionController@create');
// include: Affichage des points + pointage
Route::get('Points', 'PointsController@create');
//------------------------------------------------
//---Includes Dans la page d'accueil pour l'Administrateur---\\
// include: Si BDD non créer
Route::get('BDD', 'BDDController@create');
// include: si BDD créer
Route::get('BDD_Gestion', 'BDD_GestionController@create');
// include: Gestion des jeux
Route::get('Jeux', 'JeuxController@create');
// include: Ajouter un jeux
Route::get('AddJeux', 'AddJeuxController@create');
// include: Tirage au sort
Route::get('Tirage', 'TirageController@create');
//---------------------------------------------------------\\
