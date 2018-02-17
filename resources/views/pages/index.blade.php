@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                @if(!Auth::guest())
                    <h1 class="brand-heading">Welcome back, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}!</h1>
                @else
                    <h1 class="brand-heading">{{$title}}</h1>
                    <p class="intro-text">A website service that provides DND players with surplus information and details surrounding the DND world!</p>
                    <a class="btn btn-primary btn-lg" href="/seniorprojectrpg/public/login" role="button">Login</a>
                    <a class="btn btn-success btn-lg" href="/seniorprojectrpg/public//register" role="button">Sign Up</a>
                @endif
            </div>
        </div>
    </div>        
@endsection