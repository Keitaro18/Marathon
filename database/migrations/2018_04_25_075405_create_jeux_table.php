<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jeux', function (Blueprint $table) {
            $table->increments('idJeu');
            $table->integer('codeJeu');
            $table->string('nomJeu',40);
            $table->string('proprietaire',30);
            $table->string('disponibilite',3);
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
        Schema::dropIfExists('Jeux');
    }
}
