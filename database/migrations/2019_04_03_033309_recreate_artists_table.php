<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs_artists', function (blueprint $table) {
            $table->dropForeign('songs_artists_artist_id_foreign');
            $table->dropColumn('artist_id');
        });

        Schema::dropIfExists('artists');
        
        Schema::create('artists', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');
            $table->string('name');
            $table->string('artistic_name')->nullable();
        });

        Schema::table('songs_artists', function (Blueprint $table) {
            $table->integer('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
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
            $table->dropForeign('songs_artists_artist_id_foreign');
            $table->dropColumn('artist_id');
        });

        Schema::dropIfExists('artists');

        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::table('songs_artists', function (Blueprint $table) {
            $table->integer('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });
    }
}
