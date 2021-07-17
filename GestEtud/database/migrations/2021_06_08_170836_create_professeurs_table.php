<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('sexe');
            $table->string('civilite');
            $table->string('situation_familiale');
            $table->string('mail');
            $table->date('date_naissance');
            $table->string('pays');
            $table->string('ville');
            $table->string('nationalite');
            $table->string('code_postal');
            $table->string('tel_fixe');
            $table->string('tel_portable');
            $table->string('mot_de_passe');

            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('pfes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_emp_temps')->unsigned();
            $table->foreign('id_emp_temps')->references('id')->on('emploi_temps')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professeurs', function (Blueprint $table) 
        {
        Schema::dropIfExists('professeurs');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_admin');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_emp_temps');
       
        }
        );
    }
}
