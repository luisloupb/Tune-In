<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'year',
        'album_id',
    ];

    public function album()
    {
    	return $this->belongsTo(Album::class);
    }

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
}
