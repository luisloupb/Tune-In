<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'countries';

    protected $fillable = [
        'description'
    ];

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
