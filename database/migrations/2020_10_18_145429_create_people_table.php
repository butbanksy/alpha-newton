<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string("prenom");
            $table->string("nom");
            $table->date("date_naissance");
            $table->string("lieu_naissance");
            $table->string("adresse");
            $table->string("telephone");
            $table->string("email");
            $table->string("niveau_scolaire");
            $table->string("option");
            $table->string("etablissement");
            $table->boolean("maladie_specifique");
            $table->boolean("maladie_respiratoire");
            $table->boolean("maladie_vue");
            $table->boolean("maladie_audition");
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
        Schema::dropIfExists('people');
    }
}
