@extends('layouts.app')

@section('content')
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row text-center">
                    @if(!Auth::guest())
                        <h1 class="brand-heading">Welcome back, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}!</h1>
                    @else
                        <h1 class="brand-heading">{{$title}}</h1>
                        <p class="intro-text">A website service that provides DND players with surplus information and details surrounding the DND world!</p>
                        <a class="btn btn-primary btn-lg" href="login" role="button">Login</a>
                        <a class="btn btn-success btn-lg" href="register" role="button">Sign Up</a>
                    @endif
                </div>
            </div>
        </div>
    </header>
@endsection