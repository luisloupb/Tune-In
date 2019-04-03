<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs_artists', function (blueprint $table) {
            $table->dropForeign('songs_artists_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::table('songs_genres', function (blueprint $table) {
            $table->dropForeign('songs_genres_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::table('songs_play_lists', function (blueprint $table) {
            $table->dropForeign('songs_play_lists_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::table('recommendations', function (blueprint $table) {
            $table->dropForeign('recommendations_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::dropIfExists('songs');

        Schema::create('songs', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');
            $table->string('name');
        });

        Schema::table('songs_artists', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('songs_genres', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('songs_play_lists', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs_artists', function (blueprint $table) {
            $table->dropForeign('songs_artists_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::table('songs_genres', function (blueprint $table) {
            $table->dropForeign('songs_genres_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::table('songs_play_lists', function (blueprint $table) {
            $table->dropForeign('songs_play_lists_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::table('recommendations', function (blueprint $table) {
            $table->dropForeign('recommendations_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::dropIfExists('songs');

        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('year');
        });

        Schema::table('songs_artists', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('songs_genres', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('songs_play_lists', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
    }
}
