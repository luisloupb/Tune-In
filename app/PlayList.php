<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    protected $table = 'play_lists';

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function songPlayList()
    {
        return $this->belongsTo(SongPlayList::class);
    }
}
