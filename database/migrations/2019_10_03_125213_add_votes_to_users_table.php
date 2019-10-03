<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('name')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('tel')->after('last_name')->nullable();
            $table->string('username')->after('tel')->nullable();
            $table->string('pays')->after('username')->nullable();
            $table->string('ville')->after('pays')->nullable();
            $table->boolean('boutiquier')->after('ville')->dafault(false)->nullable();
            $table->boolean('particulier')->after('boutiquier')->dafault(false)->nullable();
            $table->boolean('admin')->after('particulier')->dafault(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('tel');
            $table->dropColumn('username');
            $table->dropColumn('pays');
            $table->dropColumn('ville');
            $table->dropColumn('boutiquier');
            $table->dropColumn('particulier');
            $table->dropColumn('admin');
        });
    }
}
