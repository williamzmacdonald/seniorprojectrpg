<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class combat extends Model
{
    public function fighters()
	{
		return $this->hasMany('App\fighter');
	}
}
