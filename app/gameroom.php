<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameroom extends Model
{
    protected $fillable = ['title', 'password'];
	public function users()
	{
		return $this->belongsToMany('App\User')->withTimestamps()->withPivot('gamemaster');				
	}
}
