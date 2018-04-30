<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Joueurs', function (Blueprint $table) {
            $table->integer('idJoueur')->unique();
            $table->string('nom',60);
            $table->string('prenom',60);
            $table->string('mail')->unique();
            $table->date('dateNaissance');
            $table->datetime('dateArrivee');
            $table->datetime('dernierPassage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Joueurs');
    }
}
