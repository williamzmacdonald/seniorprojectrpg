<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gameroom;

class FighterController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}
	public function store(string $joinlink)
	{
		//require title and description
		$this->validate(request(), [
			'name' => 'required',
			'health' => 'required',
		]);

		//add fighter and save to table
		$fighter = new \App\fighter;
		$fighter->name = request('name');
		$fighter->health = request('health');
		$fighter->avatarurl = request('avatarurl');
		$fighter->initiative = request('initiative');
		$fighter->gameroom_id = request('gameroom_id');
		$fighter->save();
		
	}
	public function show(string $joinlink)
	{
		$gameroom = gameroom::where('joinlink', $joinlink)->first();  
		$fighters = $gameroom->fighters;
		return $fighters;
	}
	public function reload(string $joinlink)
	{
		$gameroom = gameroom::where('joinlink', $joinlink)->first();  
		$fighters = $gameroom->fighters()->where('enabled', true)
						->orderBy('initiative', 'desc')->get();
		return $fighters;
	}
}
