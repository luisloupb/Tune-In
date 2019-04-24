<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
    ];

    public function songGenre()
    {
    	return $this->belongsTo(SongGenre::class);
    }
}
