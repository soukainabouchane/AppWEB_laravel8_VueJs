<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadrerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadrer', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_prof')->unsigned();
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_pfe')->unsigned();
            $table->foreign('id_pfe')->references('id')->on('pfes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('encadrer');
       
    }
}
