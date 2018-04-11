@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<script>
	var gameroom_id = {!! json_encode($room->id) !!};
    var user_id = {!! json_encode($user->id) !!};
    var note = {!! json_encode($notes) !!};
</script>

<div class="pages background">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img src="../img/avatar.jpg" alt="Avatar" style="width:100%;">
                    <div class="container relative" style="padding-bottom: 32px;">
                        <h4><b>Name of Player</b></h4>
                        <h5 style="position: absolute; top: 16px; right: 16px;">#</h5>
                        <h5 style="position: absolute; bottom: 24px;">Class</h5>
                        <h5 style="position: absolute; bottom: 24px; right: 16px;">Health</h5>
                        <h5 style="position: absolute; bottom: 8px;">Status Effects</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card" style="height: 462px;">
                    <div class="col-sm-6">
                        <div class="panel-heading">Specific Info</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <!-- Notes Section -->
                    <div class="col-sm-3" style="border-left:1px solid black; height:447px; width: 420px;">            
                        <div class="panel-heading assassin font-22 uppercase">Notes</div>
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
                        @if ($notes->count() >= 1)
                            <div class="panel panel-default" id="list">
                                <ul style="padding-left: 0;">
                                    @foreach ($notes as $note)
                                        @if($note->id == 0)
                                            <li style="margin-left: 10px; border: none;">
                                                <div onclick="javascript:showNote({{$note->id}});" class="pointer" id="{{$note->id}}">
                                                    <h4>{{ $note->title }}</h4>
                                                    <p class="font-black" id="body{{$note->id}}" style="display: none;">{{ $note->body }}</p>
                                                </div>
                                            </li>
                                        @else
                                            <li style="margin-left: 10px; border-top: 1px solid gainsboro; width: 350px;">
                                                <div onclick="javascript:showNote({{$note->id}});" class="pointer" id="{{$note->id}}">
                                                    <h4>{{ $note->title }}</h4>
                                                    <p class="font-black" id="body{{$note->id}}" style="display: none;">{{ $note->body }}</p>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 0 auto; width: 80%;">
            <div class="assassin uppercase" style="text-align: center; background: none; border-bottom: none;">
                <h3>Combat</h3>
            </div>
            <div style="margin: 0 auto; width: 70%;" id="list">
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
                    <img style="width: 200px; border-radius: 0 0 5px 5px;" src="../img/tanis.jpg" alt="John">
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
                    <img style="width: 200px; border-radius: 0 0 5px 5px;" src="../img/tanis.jpg" alt="John">
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
                    <img style="width: 200px; border-radius: 0 0 5px 5px;" src="../img/tanis.jpg" alt="John">
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
                    <img style="width: 200px; border-radius: 0 0 5px 5px;" src="../img/tanis.jpg" alt="John">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection