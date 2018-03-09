<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\gameroom;
use App\userroom;

function randomURL($URLlength = 8) {
	$url = "";
    $charray = array_merge(range('a','z'), range('0','9'));
    $max = count($charray) - 1;
    for ($i = 0; $i < $URLlength; $i++) {
        $randomChar = mt_rand(0, $max);
        $url .= $charray[$randomChar];
    }
    return $url;
}
class RoomsController extends Controller
{
    public function index()
	{
		$user = \Auth::user();
		$rooms = $user->gamerooms;
		return view('rooms.index', compact('rooms'));    
	}
	public function create()
	{
		return view('rooms.create');
	}
	public function store()
	{
		$this->validate(request(), [
			'title' => 'required',
			'description' => 'required'
		]);
		$gameroom = new \App\gameroom;
		$gameroom->title = request('title');
		$gameroom->description = request('description');
		$gameroom->joinlink = randomURL(10);
		$gameroom->save();
		return redirect("/rooms/$gameroom->joinlink");
	}
	public function show(string $joinlink)
	{
		$user = \Auth::user();
		$room = gameroom::where('joinlink', $joinlink)->first();
		$hasPivot = $user->gamerooms()->where('id', $room->id)->exists();
		if(!$hasPivot)
		{
			if($room->users()->exists())
				$room->users()->save($user, ['gamemaster' => false, 'nickname' => $user->name]);
			else
				$room->users()->save($user, ['gamemaster' => true, 'nickname' => $user->name]);
		}
		
		return view('rooms.show', compact('room'));
	}
}
