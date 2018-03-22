<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth')->except('index', 'about', 'services', 'login');
    }
    
    public function  index() {
        $title = 'WELCOME to EVOLVED';
        return view('pages.index')->with('title', $title);
    }

    public function  about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function  services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Compendium', 'Character/Monster Wiki', 'Messaging']
        );
        return view('pages.services')->with($data);
    }
	public function  login() {
		return view('login.index');
    }

    public function claimed()
    {
        return redirect('');
    }
}
