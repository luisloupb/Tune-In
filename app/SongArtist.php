<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongArtist extends Model
{
    protected $table = 'songs_artists';

    protected $fillable = [
        'song_id',
        'artist_id',
    ];

    public function song()
    {
    	return $this->belongsTo(Song::class);
    }

    public function artist()
    {
    	return $this->belongsTo(Artist::class);
    }
}
