<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\gameroom;

class RoomsController extends Controller
{
    public function index()
	{
		$rooms = gameroom::all();
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
			'body' => 'required'
		]);
		$gameroom = new \App\gameroom;
		$gameroom->title = request('title');
		$gameroom->password = Hash::make($request('password'));
		$gameroom->save();
		
		return redirect('/rooms');
	}
	public function show(gameroom $gameroom)
	{
		return view('rooms.show', compact('gameroom'));
	}
}
