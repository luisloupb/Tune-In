<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'year'
    ];

    public function songArtist()
    {
    	return $this->belongsTo(SongArtist::class,'song_id');
    }

    public function songGenre()
    {
    	return $this->belongsTo(SongGenre::class);
    }

    public function songPlayList()
    {
        return $this->belongsTo(SongPlayList::class);
    }

    public function rating()
    {
    	return $this->belongsTo(Rating::class);
    }
}
