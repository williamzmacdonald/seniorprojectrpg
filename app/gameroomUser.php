<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class gameroomUser extends Pivot
{
	public function comments()
	{
		return $this->hasMany('App/comment');
	}
    
}
