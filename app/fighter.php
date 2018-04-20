<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fighter extends Model
{
    public function room()
	{
		return $this->belongsTo('App\gameroom');				
	}
}
