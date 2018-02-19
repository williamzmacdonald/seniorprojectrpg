<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gameroom;

class RoomsController extends Controller
{
    public function index()
	{
		$rooms = gameroom::all();
		return view('rooms.index', compact('rooms'));    
	}
}
