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
    	return $this->hasMany(SongArtist::class);
    }

    public function songGenre()
    {
    	return $this->hasMany(SongGenre::class);
    }

    public function songPlayList()
    {
        return $this->hasMany(SongPlayList::class);
    }

    public function rating()
    {
    	return $this->belongsTo(Rating::class);
    }
}
