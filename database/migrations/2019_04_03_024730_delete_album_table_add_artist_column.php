<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteAlbumTableAddArtistColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('artistic_name')->nullable();
        });

        Schema::table('songs', function (Blueprint $table) {
            $table->dropForeign('songs_album_id_foreign');
            $table->dropColumn('album_id');
        });

        Schema::dropIfExists('albums');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->dropColumn('profession');
        });

        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::table('songs', function (Blueprint $table) {
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
        });
    }
}
