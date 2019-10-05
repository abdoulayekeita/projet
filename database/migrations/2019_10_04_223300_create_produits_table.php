<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_produit')->nullable();
            $table->string('prix')->nullable();
            $table->string('description')->nullable();
            $table->boolean('publier')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('sous_categorie_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sous_categorie_id')->references('id')->on('sous_categories');
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
        Schema::dropIfExists('produits');
    }
}
