<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });

        Schema::table('songs', function (Blueprint $table) {
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
        });


        Schema::table('play_lists', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('songs_play_lists', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');

            $table->integer('play_list_id')->unsigned();
            $table->foreign('play_list_id')->references('id')->on('play_lists')->onDelete('cascade');
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('songs_artists', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');

            $table->integer('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });

        Schema::table('songs_genres', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');

            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (blueprint $table) {
            $table->dropForeign('users_city_id_foreign');
            $table->dropColumn('city_id');

            $table->dropForeign('users_role_id_foreign');
            $table->dropColumn('role_id');
        });

        Schema::table('songs', function (blueprint $table) {
            $table->dropForeign('songs_album_id_foreign');
            $table->dropColumn('album_id');
        });

        Schema::table('play_lists', function (blueprint $table) {
            $table->dropForeign('play_lists_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('songs_play_lists', function (blueprint $table) {
            $table->dropForeign('songs_play_lists_song_id_foreign');
            $table->dropColumn('song_id');

            $table->dropForeign('songs_play_lists_play_list_id_foreign');
            $table->dropColumn('play_list_id');
        });

        Schema::table('recommendations', function (blueprint $table) {
            $table->dropForeign('recommendations_user_id_foreign');
            $table->dropColumn('user_id');

            $table->dropForeign('recommendations_song_id_foreign');
            $table->dropColumn('song_id');
        });

        Schema::table('songs_artists', function (blueprint $table) {
            $table->dropForeign('songs_artists_song_id_foreign');
            $table->dropColumn('song_id');

            $table->dropForeign('songs_artists_artist_id_foreign');
            $table->dropColumn('artist_id');
        });

        Schema::table('songs_genres', function (blueprint $table) {
            $table->dropForeign('songs_genres_song_id_foreign');
            $table->dropColumn('song_id');

            $table->dropForeign('songs_genres_genre_id_foreign');
            $table->dropColumn('genre_id');
        });
    }
}
