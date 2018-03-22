@extends('layouts.app')

@section('content')
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row text-center">
                    <div>
                        @if(!Auth::guest())
                            <h1 class="brand-heading" style="text-transform: lowercase; margin: 0px;">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h1>
                        @endif
                        <h1 class="brand-heading">{{$title}}</h1>
                    </div>
                    <p class="intro-text" style="">A website service that provides RPG users with surplus information
                        <br>and details surrounding the adventurous world!
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div class="background">
        <div class="container">
            <h3 class="text-center" style="color: black; font-family: 'Assassin'; text-transform: uppercase; margin-top: 50px;">Character List:</h3>
            <div class="row" style="margin-top: 50px; padding-bottom: 10px;">
                <div class="col-md-4">
                    <div class="img-circle" style="margin: auto;">
                        <img src="img/tanis.jpg" class="portrait" alt="Image" />
                    </div>
                    <h3 style="color: black; font-family: 'Assassin'; text-transform: uppercase;">Name</h3>
                    <p style="color: black;">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-default" href="claimed" role="button" style="color: black; font-family: 'Assassin'; text-transform: lowercase; font-size: 24px; line-height: 80%;">Claim</a></p>
                </div>
                <div class="col-md-4">
                    <div class="img-circle" style="margin: auto;">
                        <img src="img/tanis.jpg" class="portrait" alt="Image" />
                    </div>
                    <h3 style="color: black; font-family: 'Assassin'; text-transform: uppercase;">Name</h3>
                    <p style="color: black;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-default" href="claimed" role="button" style="color: black; font-family: 'Assassin'; text-transform: lowercase; font-size: 24px; line-height: 80%;">Claim</a></p>
                </div>
                <div class="col-md-4">
                    <div class="img-circle" style="margin: auto;">
                        <img src="img/tanis.jpg" class="portrait" alt="Image" />
                    </div>
                    <h3 style="color: black; font-family: 'Assassin'; text-transform: uppercase;">Name</h3>
                    <p style="color: black;">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="claimed" role="button" style="color: black; font-family: 'Assassin'; text-transform: lowercase; font-size: 24px; line-height: 80%;">Claim</a></p>
                </div>
            </div>

            <div class="row" style="margin-top: 50px; padding-bottom: 50px;">
                <div class="col-md-4">
                    <div class="img-circle" style="margin: auto;">
                        <img src="img/tanis.jpg" class="portrait" alt="Image" />
                    </div>
                    <h3 style="color: black; font-family: 'Assassin'; text-transform: uppercase;">Name</h3>
                    <p style="color: black;">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-default" href="claimed" role="button" style="color: black; font-family: 'Assassin'; text-transform: lowercase; font-size: 24px; line-height: 80%;">Claim</a></p>
                </div>
                <div class="col-md-4">
                    <div class="img-circle" style="margin: auto;">
                        <img src="img/tanis.jpg" class="portrait" alt="Image" />
                    </div>
                    <h3 style="color: black; font-family: 'Assassin'; text-transform: uppercase;">Name</h3>
                    <p style="color: black;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-default" href="claimed" role="button" style="color: black; font-family: 'Assassin'; text-transform: lowercase; font-size: 24px; line-height: 80%;">Claim</a></p>
                </div>
                <div class="col-md-4">
                    <div class="img-circle" style="margin: auto;">
                        <img src="img/tanis.jpg" class="portrait" alt="Image" />
                    </div>
                    <h3 style="color: black; font-family: 'Assassin'; text-transform: uppercase;">Name</h3>
                    <p style="color: black;">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="claimed" role="button" style="color: black; font-family: 'Assassin'; text-transform: lowercase; font-size: 24px; line-height: 80%;">Claim</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection 