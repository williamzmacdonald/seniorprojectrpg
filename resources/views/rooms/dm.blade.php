@extends('layouts.app')

@section('content')
<div class="pages background">
    <div id="mySidenav" class="sidenav">
        <div class="container">
            <a href="javascript:void(0)" class="closebtn pull-right" onclick="closeNav()">&times;</a>
            <a class="pull-left" href="#" style="margin-top: 30px;"><span style="font-size: 30px;" id="drag-npc" class="glyphicon glyphicon-eye-open" aria-hidden="true"  draggable="true" ondragstart="drag(event)"></span></a>
            <a href="#" style="margin-top: 30px;"><span style="font-size: 30px; margin-left: 50px;" id="drag-notes" class="glyphicon glyphicon-pencil" aria-hidden="true"  draggable="true" ondragstart="drag(event)"></span></a>
        </div>
    </div>
    <div class="container">
        <span class="glyphicon glyphicon-plus font-24 pointer" aria-hidden="true" onclick="openNav()" style="margin-bottom: 10px;"></span>
    </div>
    <div class="container relative" id="appendArea" style="height: 1000px; margin: auto;" ondrop="drop(event, this)" ondragover="allowDrop(event)">
        <div class="row relative">
            <div class="absolute pull-left" style="width: 500px; margin-left: 40px;">
                <div class="assassin uppercase" style="text-align: center; background: none; border-bottom: none;">
                    <h3>Combat</h3>
                </div>
                <combat></combat>
                <div id="list">
                    <!-- List group -->
                    <ul id="combat" class="list-group">
                        <li class="list-group-item fighter">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <h5>Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                        </li>
                        <li class="list-group-item fighter">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <h5>Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                        </li>
                        <li class="list-group-item fighter">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>    
                            <h5>Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                        </li>
                        <li class="list-group-item fighter">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <h5>Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                        </li>
                        <li class="list-group-item fighter" style="border-bottom: none;">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <h5>Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="combat_list" class="aboslute pull-right" style="width: 500px; margin-right: 40px;">
                <div class="assassin uppercase relative" style="text-align: center; background: none; border-bottom: none;">
                    <h3>Combat List</h3>
                    <a role="button" class="btn btn-default absolute" id="edit_combat" style="top: 0; right: 5px; font-size: 12px;"><span>Edit</span></a>
                </div>
                <div id="list">
                    <!-- List group -->
                    <ul id="combat" class="list-group">
                        <li class="list-group-item fighter">
                            <a href="#" role="button" class="btn btn-primary delete_combat" style="display: none;">Delete</a>
                            <span class="glyphicon glyphicon-user avatar_combat"aria-hidden="true"></span>
                            <h5 class="player_combat">Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                            <a href="#" role="button" class="btn btn-success add_combat" style="display: none;">Add</a>
                        </li>
                        <li class="list-group-item fighter">
                            <a href="#" role="button" class="btn btn-primary delete_combat" style="display: none;">Delete</a>
                            <span class="glyphicon glyphicon-user avatar_combat"aria-hidden="true"></span>
                            <h5 class="player_combat">Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                            <a href="#" role="button" class="btn btn-success add_combat" style="display: none;">Add</a>
                        </li>
                        <li class="list-group-item fighter">
                            <a href="#" role="button" class="btn btn-primary delete_combat" style="display: none;">Delete</a>
                            <span class="glyphicon glyphicon-user avatar_combat"aria-hidden="true"></span>
                            <h5 class="player_combat">Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                            <a href="#" role="button" class="btn btn-success add_combat" style="display: none;">Add</a>
                        </li>
                        <li class="list-group-item fighter">
                            <a href="#" role="button" class="btn btn-primary delete_combat" style="display: none;">Delete</a>
                            <span class="glyphicon glyphicon-user avatar_combat"aria-hidden="true"></span>
                            <h5 class="player_combat">Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                            <a href="#" role="button" class="btn btn-success add_combat" style="display: none;">Add</a>
                        </li>
                        <li class="list-group-item fighter" style="border-bottom: none;">
                            <a href="#" role="button" class="btn btn-primary delete_combat" style="display: none;">Delete</a>
                            <span class="glyphicon glyphicon-user avatar_combat"aria-hidden="true"></span>
                            <h5 class="player_combat">Name of Player</h5>
                            <h6 class="health">Health</h6>
                            <h6 class="initiative">Initiative</h6>
                            <a href="#" role="button" class="btn btn-success add_combat" style="display: none;">Add</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row relative" style="margin: 0 auto; width: 80%;">
            <div class="assassin uppercase" style="text-align: center; background: none; border-bottom: none;">
                <h3>Players</h3>
            </div>
            <div style="margin: 0 auto; width: 95%;">
                <div class="card" style="margin-right: 15px; display: inline-block;">
                    <div class="container relative" style="padding-bottom: 16px;">
                        <a href="javascript:register_popup('1', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 class="absolute top-right">#</h5>
                        <h5>Class</h5>
                        <h5 class="absolute bottom-right">Health</h5>
                        <h5><br>Info</h5>
                    </div>
                    <div class="square" style="border-radius: 0 0 5px 5px;"></div>
                </div>
                <div class="card" style="margin-right: 15px; display: inline-block;">
                    <div class="container" style="position: relative; padding-bottom: 16px;">
                        <a href="javascript:register_popup('2', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 class="absolute top-right">#</h5>
                        <h5>Class</h5>
                        <h5 class="absolute bottom-right">Health</h5>
                        <h5><br>Info</h5>
                    </div>
                    <div class="square" style="border-radius: 0 0 5px 5px;"></div>
                </div>
                <div class="card" style="margin-right: 15px; display: inline-block;">
                    <div class="container" style="position: relative; padding-bottom: 16px;">
                        <a href="javascript:register_popup('3', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 class="absolute top-right">#</h5>
                        <h5>Class</h5>
                        <h5 class="absolute bottom-right"></h5>
                        <h5><br>Info</h5>
                    </div>
                    <div class="square" style="border-radius: 0 0 5px 5px;"></div>
                </div>
                <div class="card" style="margin-right: 15px; display: inline-block;">
                    <div class="container" style="position: relative; padding-bottom: 16px;">
                        <a href="javascript:register_popup('4', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 class="absolute top-right">#</h5>
                        <h5>Class</h5>
                        <h5 class="absolute bottom-right">Health</h5>
                        <h5><br>Info</h5>
                    </div>
                    <div class="square" style="border-radius: 0 0 5px 5px;"></div>
                </div>
            </div>
        </div>
        <h3 class="font-30 font-black assassin uppercase" id="add" style="text-align: center; margin-top: 150px;">Add Content Here</h3>
    </div>
</div>

<div class="card" id="npc" style="margin-right: 15px; display: none;">
    <div class="container relative" style="padding-bottom: 16px;">
        <a href="javascript:register_popup('1', 'Name of Player');">
            <h4 style="color: red;"><b>Name of Player</b></h4>
        </a>
        <h5 class="absolute top-right">#</h5>
        <h5>Class</h5>
        <h5 class="absolute bottom-right">Health</h5>
        <h5><br>Info</h5>
    </div>
    <img class="players" src="../img/tanis.jpg" alt="John">
</div>

<!-- Notes Section -->
<div class="card col-sm-3" id="notes" style="height:447px; width: 430px; display: none; margin-right: 15px;">
    <div class="panel-heading assassin uppercase font-22">Notes</div>
    <a href="javascript:addnew();" role="button" class="btn btn-primary" id="add_new"><span>&#43;</span></a>
    <div id="note" style="display: none;">
        <div class="form-group">
            <input type="text" class="form-control" id="title" name ="title" placeholder="Title"></input>
        </div>
        <div class="form-group">
            <textarea class="form-control" id="area" rows="10" cols="50" placeholder="Description"></textarea>
        </div>
        <button onclick="javascript:save();" type="submit" class="btn btn-success font-white" style="margin-top: 10px;">Save</button>
        <button onclick="clear();" type="submit" class="btn btn-primary font-white" id="cl" style="margin-top: 10px;">Clear</button>                            
    </div>
    <div class="panel panel-default" id="list">
        <!-- List group -->
        <ul style="padding-left: 0;">
            <li style="margin-left: 10px;">
                <a href="javascript:addNote();">
                    <h4>Title #1</h4>
                    <p class="font-black">Text Content #1</p>
                </a>
            </li>
            <li style="margin-left: 10px; border-top: 1px solid gainsboro; width: 350px;">
                <a href="#">
                    <h4>Title #2</h4>
                    <p class="font-black">Text Content #2</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection