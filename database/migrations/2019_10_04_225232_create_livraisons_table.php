<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('date_livraison')->nullable();
            $table->string('description_livraison')->nullable();
            $table->integer('commande_id')->unsigned();
            $table->integer('boutique_id')->unsigned();
            $table->integer('modelivraison_id')->unsigned();
            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->foreign('boutique_id')->references('id')->on('boutiques');
            $table->foreign('modelivraison_id')->references('id')->on('modelivraisons');
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
        Schema::dropIfExists('livraisons');
    }
}
