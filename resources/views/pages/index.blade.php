@extends('layouts.app')

@section('content')
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row text-center">
                    @if(!Auth::guest())
                        <h1 class="brand-heading">welcome back, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}!</h1>
                    @else
                        <h1 class="brand-heading" style="">{{$title}}</h1>
                        <p class="intro-text" style="">A website service that provides RPG users with surplus information
                            <br>and details surrounding the adventurous world!
                        </p>
                        <br>
                        <a class="btn btn-primary btn-lg" href="login" role="button">login</a>
                        <a class="btn btn-success btn-lg" href="register" role="button">sign up</a>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <div class="background">
        <div class="container">
            <h3 class="text-center" style="color: black; font-family: 'Assassin'; text-transform: uppercase; margin-top: 50px;">Character List:</h3>
            <div class="panel" style="background-color: white; width: 500px; height: 250px; margin-top: 50px;">
            <img class="character-image" src="img/tanis.jpg"/>
                Testing
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <p class="text-muted"style="float: left;">
                <a class="text-muted" href="{{ url('/') }}">Home</a> | 
                <a class="text-muted" href="{{ url('about') }}">About</a> | 
                <a class="text-muted" href="{{ url('services') }}">Services</a> |
                <a class="text-muted" href="{{ url('rooms') }}">Rooms</a>
            </p>
            <p class="text-muted pull-right">&copy; 2018 Evolved | All Rights Reserved</p>
        </div>
    </footer>
@endsection 