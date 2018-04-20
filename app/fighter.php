<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fighter extends Model
{
	public $timestamps = false;
    public function room()
	{
		return $this->belongsTo('App\gameroom');				
	}
}
