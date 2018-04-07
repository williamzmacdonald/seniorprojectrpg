<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request)
	{
		//require title and description
		$this->validate(request(), [
			'title' => 'required',
			'body' => 'required'
		]);
		//create gameroom and save to table
		$note = new \App\note;
		$note->user_id = request('user_id');
		$note->gameroom_id = request('gameroom_id');
		$note->title = request('title');
		$note->body = request('body');
		$note->save();
		//redirect to the generated url
		return response()
		->json($note);
	}
}
