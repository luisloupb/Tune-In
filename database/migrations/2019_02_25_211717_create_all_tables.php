<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('play_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('year');
        });

        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('recommendations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prediction');
        });

        Schema::create('songs_artists', function (Blueprint $table) {
            $table->increments('id');
        });

        Schema::create('songs_genres', function (Blueprint $table) {
            $table->increments('id');
        });

        Schema::create('songs_play_lists', function (Blueprint $table) {
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('play_lists');
        Schema::dropIfExists('songs');
        Schema::dropIfExists('albums');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('artists');
        Schema::dropIfExists('recommendations');
        Schema::dropIfExists('songs_artists');
        Schema::dropIfExists('songs_genres');
        Schema::dropIfExists('songs_play_lists');
    }
}
