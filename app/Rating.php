<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';

    protected $fillable = [
        'rating_number',
        'user_id',
        'song_id'
    ];

    public function song()
    {
    	return $this->hasMany(Song::class);
    }

    public function user()
    {
    	return $this->hasMany(User::class);
    }

}
