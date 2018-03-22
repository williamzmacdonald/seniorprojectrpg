@extends('layouts.app')

@section('content')
<div class="pages background">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="brand-heading" style="text-transform: uppercase; color: black;">{{$title}}</h1>
                <p class="intro-text" style="text-transform: uppercase; color: black;">
                    Evolved digitilizes pen-and-paper RPGs for easier management of characters and gameplay.
                    No matter which RPG you choose to play, Evolved helps users keep track of all the
                    characters they've created, their information, background, status, and the adventures
                    they embark on. As computer scientists, our primary concern was bringing our customers a
                    secure website that's functionality and design helped them enjoy the services Evolved provides.
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

        <hr style="border-color: black;">

        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-sm-7">
                <h3 class="brand-heading" style="text-transform: uppercase; color: black; margin-top: 40px;">Game Rooms</h3>
                <p style="color: black;">
                    There are two different game rooms: one for the average player and the other for the dungeon master.
                    Game rooms are specific to the adventure the user is going on. It shows the character avatar, health,
                    initiative, specfic information pertaining to that character, notes they can and may have taken, and
                    also has messaging between players. For the dungeon master, their game room is customizable to their
                    needs. They can make the decision on what to have in their game room view. Their choices include the 
                    same options as the player's but can also have information on their NPCs.  
                </p>
            </div>
            <div class="col-sm-5">
                <img class="featurette-image img-responsive" src="img/gameroom.jpg" alt="Generic placeholder image" style="border-radius: 5px;">
            </div>
        </div>

        <hr style="border-color: black;">

        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-sm-5">
                <img class="featurette-image img-responsive" src="img/gameroom.jpg" alt="Generic placeholder image" style="border-radius: 5px;">
            </div>
            <div class="col-sm-7">
                <h3 class="brand-heading" style="text-transform: uppercase; color: black; margin-top: 60px;">Characters</h3>
                <p style="color: black;">
                    Evolved allows the users to create their own characters but also gives them the option to use
                    characters that have alrady been made for them. They can be easily claimed and added into a user's
                    character list. When joining a game room, the user can click and choose which character they want to
                    particpate in that adventure.
                </p>
            </div>
        </div>

        <hr style="border-color: black;">

        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-sm-7">
                <h3 class="brand-heading" style="text-transform: uppercase; color: black; margin-top: 60px;">Interaction</h3>
                <p style="color: black;">
                    User interaction is included by messaging within the game room. Without getting out of character, the
                    messaging allows the users to converse amongst each other and discuss different aspects of the game.
                    They can send each other notes and specific information about the character that other players cannot
                    see.
                </p>
            </div>
            <div class="col-sm-5">
                <img class="featurette-image img-responsive" src="img/gameroom.jpg" alt="Generic placeholder image" style="border-radius: 5px;">
            </div>
        </div>

    </div>
</div>
@endsection