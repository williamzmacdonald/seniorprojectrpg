<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\gameroom;
use App\userroom;
use App\note;

//generates random url, used on room creation
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
{//only allow users that are logged in to view rooms
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index()
	{ //fetch the user and gamerooms associated with that user
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
		//require title and description
		$this->validate(request(), [
			'title' => 'required',
			'description' => 'required'
		]);
		//create gameroom and save to table
		$gameroom = new \App\gameroom;
		$gameroom->title = request('title');
		$gameroom->description = request('description');
		$gameroom->joinlink = randomURL(10);
		$gameroom->save();
		//redirect to the generated url
		return redirect("/rooms/$gameroom->joinlink");
	}
	public function show(string $joinlink)
	{
		//get user and get room by given URL
		$user = \Auth::user();
		$room = gameroom::where('joinlink', $joinlink)->first();
		//check if a relation between the user and gameroom already exists
		$pivot = $user->gamerooms()->where('gameroom_id', $room->id)->exists();
		//if not we create the relation
		if(!$pivot)
		{	//check if any users exist in the room, if not then the first user is the gamemaster
			if($room->users()->exists())
				$room->users()->save($user, ['gamemaster' => false, 'nickname' => $user->name]);
			else //if someone exists in the relationship then player is not a gamemaster
				$room->users()->save($user, ['gamemaster' => true, 'nickname' => $user->name]);
		}
		
		$notes = note::where('gameroom_id', $room->id)->where('user_id', $user->id);
		$user_gameroom = $user->gamerooms()->where('gameroom_id', $room->id)->first();
		if($user_gameroom->gamemaster)
		{
			return view('rooms.dm', compact('room', 'notes', 'user'));

		}
		else
		{
			return view('rooms.player', compact('room', 'notes', 'user'));
		}
	}
}