@extends('layouts.app')

@section('content')
<body>
<div id="pgs" class="pages background">
    <div class="container">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="padding-top: 35px;">&times;</a>
            <li class="dropdown" style="padding-top: 0;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Notes <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" style="width: 250px;">
                    <li>
                        <a href="">
                            Top Left
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Top Right
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="line-height: 0;">
                    NPCs <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" style="width: 250px;">
                    <li>
                        <a href="">
                            Name of Player
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Name of Player
                        </a>
                    </li>
                </ul>
            </li>
        </div>

        <span style="font-size:30px; cursor:pointer; color: black;" onclick="openNav()">&#9776;Add Content</span>
    </div>
</div>
</body>