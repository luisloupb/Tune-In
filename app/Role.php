<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'description'
    ];

    public function users()
    {
    	return $this->belongsTo(User::class);
    }
}
