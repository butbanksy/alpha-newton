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
            $table->date("date_naissance")->nullable();
            $table->string("lieu_naissance")->nullable();
            $table->string("adresse")->nullable();
            $table->string("telephone");
            $table->string("email")->nullable();
            $table->string("niveau_scolaire");
            $table->string("option")->nullable();
            $table->string("etablissement")->nullable();
            $table->boolean("maladie_specifique")->nullable();
            $table->boolean("maladie_respiratoire")->nullable();
            $table->boolean("maladie_vue")->nullable();
            $table->boolean("maladie_audition")->nullable();
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
