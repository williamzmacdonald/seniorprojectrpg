@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    var gameroom_id = {!! json_encode($room->id) !!};
    var user_id = {!! json_encode($user->id) !!};
    var notes = {!! json_encode($notes) !!};
    var joinlink = {!! json_encode($room->joinlink) !!};
</script>
@section('content')
<div class="pages background">
    <div>
        <h1 class="assassin font-black uppercase text-center">{{ $room->title }}</h1>
        <h5 class="assassin font-black uppercase text-center">{{ $room->description }}</h5>
    </div>
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
        <combat joinlink={{ $room->joinlink }} gameroomid={{ $room->id }}></combat>
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
    <div class="panel-heading assassin font-22 uppercase" style="text-align: center">Notes</div>
    <a role="button" class="btn btn-primary" id="add_new"><span>&#43;</span></a>
    <a role="button" class="btn btn-primary" id="go_back"><span >&#8592;</span></a>
    <div id="note" style="display: none;">
        <div class="form-group">
            <input type="text" class="form-control" id="title" name ="title" placeholder="Title"></input>
        </div>
        <div class="form-group">
            <textarea class="form-control" id="area" rows="10" cols="50" placeholder="Description"></textarea>
        </div>
        <button id="save" type="submit" class="btn btn-success font-white" style="margin-top: 10px;">Save</button>
        <button onclick="clear();" type="submit" class="btn btn-primary font-white" id="cl" style="margin-top: 10px;">Clear</button>                            
    </div>
    <div id="noteList" style="height: 390px; width: 390px; overflow: auto;">           
        <div class="panel panel-default" id="notep" style="width: 350px; ">
            <ul id="list" style="padding-left: 0;" >
                @if ($notes->count() >= 1)
                    @foreach ($notes as $key=>$note)
                        @if($key == 0)
                            <li id="note-{{$note->id}}" style="margin-left: 10px; width: 325px; border: none;">
                                <div onclick="javascript:showNote({{$note->id}});" class="pointer" id="{{$note->id}}">
 									<button type = "submit" class="btn btn-danger btn-delete btn-xs delete-note" value="{{$note->id}}" style="float: right">X</button>
									<h4>{{ $note->title }}</h4> 
                                    <p class="font-black" id="body{{$note->id}}" style="display: none;">{{ $note->body }}</p>
                                </div>
                            </li>
                        @else
                            <li id="note-{{$note->id}}" style="margin-left: 10px; border-top: 1px solid gainsboro; width: 325px;">
                                <div onclick="javascript:showNote({{$note->id}});" class="pointer" id="{{$note->id}}">
									<button type = "submit" class="btn btn-danger btn-delete btn-xs delete-note" value="{{$note->id}}" style="float: right">X</button>
                                    <h4>{{ $note->title }}</h4> 
                                    <p class="font-black" id="body{{$note->id}}" style="display: none;">{{ $note->body }}</p>
                                </div>
                            </li>
                        @endif
                     @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>

@endsection