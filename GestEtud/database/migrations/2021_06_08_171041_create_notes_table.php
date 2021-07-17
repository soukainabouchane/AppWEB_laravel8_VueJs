<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->float('note');
            $table->string('mention');
            $table->integer('id_etudiant')->unsigned();
            $table->foreign('id_etudiant')->references('id')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_prof')->unsigned();
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_module')->unsigned()->nullable();
            $table->foreign('id_module')->references('id')->on('modules')->onUpdate('cascade');
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
        Schema::table('notes', function (Blueprint $table) 
        {
        Schema::dropIfExists('notes');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_admin');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_prof');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_etudiant');
        
        }
        );
    }
}
