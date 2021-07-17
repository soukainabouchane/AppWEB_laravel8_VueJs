<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if(!Schema::hasTable(table:'etudiants')){
            Schema::create('etudiants', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nom');
                $table->string('prenom');
                $table->string('sexe');
                $table->string('civilite');
                $table->string('situation_familiale');
                $table->date('date_naissance');
                $table->string('ville_nais');
                $table->string('nationalite');
                $table->string('pays_nais');
                $table->string('adresse');
                $table->string('tel_fixe');
                $table->string('tel_portable');
                $table->string('cin');
                $table->string('cne');
                $table->string('email');
                $table->string('password');
                $table->timestamps();
                $table->integer('id_admin')->unsigned();
                $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
                $table->integer('id_pfe')->unsigned();
                $table->foreign('id_pfe')->references('id')->on('pfes')->onDelete('cascade')->onUpdate('cascade');
                $table->integer('id_emp')->unsigned();
                $table->foreign('id_emp')->references('id')->on('emploi_temps')->onDelete('cascade')->onUpdate('cascade');
                
                Schema::enableForeignKeyConstraints();
            });

    // }
    // Schema::table('etudiants', function (Blueprint $table) {
    //     $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
    //     $table->foreign('id_pfe')->references('id')->on('pfes')->onDelete('cascade')->onUpdate('cascade');
    //     $table->foreign('id_emp')->references('id')->on('emploi_temps')->onDelete('cascade')->onUpdate('cascade');
    // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) 
        {
        Schema::dropIfExists('etudiants');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_admin');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_pfe');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_emp');
        }
        );
    }
}
