<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploiTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploi_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filiere');
            $table->string('niveau');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
              
            $table->integer('id_salle')->unsigned();
            $table->foreign('id_salle')->references('id')->on('salles')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::table('emploi_temps', function (Blueprint $table) 
        {
            
        Schema::dropColumn('id_admin');
        Schema::dropColumn('id_salle');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_admin');
        Schema::disableForeignKeyConstraints();
        $table->dropForeign('id_salle');
        
       
        }
        );
    }
}
