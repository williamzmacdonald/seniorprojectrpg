@extends('layouts.app')

@section('content')
<div class="pages background">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="brand-heading" style="text-transform: uppercase; color: black;">{{$title}}</h1>
                <p class="intro-text" style="text-transform: uppercase; color: black;">
                    For our senior project, our team decided to create a web service that digitilizes the
                    playing field for generic pen-and-paper RPGs. Having to always write things down and
                    misplace important information can be worrisome. Evolved solves that problem by
                    modernizing RPGs in an environment that we all trust in. It's easy to use and makes
                    the playing experience more enjoyable.
                </p>
            </div>
            <div class="col-sm-4">
                <h2 class="brand-heading" style="text-transform: uppercase; color: black;">Contact Us:</h2>
                <address>
                    <strong>Evolved</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>
                    (123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">name@example.com</a>
                </address>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="brand-heading" style="text-transform: uppercase; color: black;">Our Team:</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4" style="margin-left: 100px; margin-top: 50px; margin-right: 100px;">
                <div class="img-circle" style="margin: auto;">
                    <img src="img/tanis.jpg" class="portrait" alt="Image" />
                </div>
                <h3>William MacDonald
                    <br>
                    <small>Backend Developer</small>
                </h3>
                <p style="color: black;">Created the functionality of Evolved.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4" style="margin-top: 50px;">
                <div class="img-circle" style="margin: auto;">
                    <img src="img/tanis.jpg" class="portrait" alt="Image" />
                </div>
                <h3>Erin Reyes
                    <br>
                    <small>Frontend Developer</small>
                </h3>
                <p style="color: black;">Designed the layout of Evolved.</p>
            </div>
         </div>
    </div>
</div>
@endsection