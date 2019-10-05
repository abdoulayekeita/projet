<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('date_cmd')->nullable();
            $table->decimal('total_cmd')->nullable();
            $table->string('description_cmd')->nullable();
            $table->integer('produit_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('etatcmd_id')->unsigned();
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('etatcmd_id')->references('id')->on('etatcmds');
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
        Schema::dropIfExists('commandes');
    }
}
