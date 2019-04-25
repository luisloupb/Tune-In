<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongPlayList extends Model
{
    protected $table = 'songs_play_lists';

    protected $fillable = [
        'song_id',
        'playList_id',
    ];

    public function song()
    {
        return $this->hasMany(Song::class);
    }

    public function playList()
    {
        return $this->hasMany(PlayList::class);
    }
}
