<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_module');
            $table->string('nombre_heures');

           
            $table->integer('id_prof')->unsigned();
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('modules', function (Blueprint $table) 
        {
        Schema::dropIfExists('modules');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_admin');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_prof');
        
       
        }
        );
    }
}
