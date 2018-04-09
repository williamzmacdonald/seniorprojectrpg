@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<script>
	var gameroom_id = {!! json_encode($room->id) !!};
	var user_id = {!! json_encode($user->id) !!};
</script>

<div class="pages background">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img src="../img/avatar.jpg" alt="Avatar" style="width:100%;">
                    <div class="container" style="position: relative; padding-bottom: 32px;">
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
                        <div class="panel-heading" style="font-family: 'Assassin'; text-transform: uppercase; font-size: 22px;">Notes</div>
                        <a href="javascript:addnew();" role="button" class="btn btn-primary" id="add_new"><span>&#43;</span></a>
                        <div id="note" style="display: none;">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name ="title" placeholder="Title"></input>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="area" rows="10" cols="50" placeholder="Description"></textarea>
                            </div>
                            <button id="save" type="submit" class="btn btn-success" style="color: white; margin-top: 10px;">Save</button>
							<button onclick="clear();" type="submit" class="btn btn-primary" id="cl" style="color: white; margin-top: 10px;">Clear</button>                            
                        </div>
                        <div class="panel panel-default" id="list">
                            <!-- List group -->
                            <ul style="padding-left: 0;">
                                <li style="margin-left: 10px;">
                                    <a href="#">
                                        <h4>Title #1</h4>
                                        <p style="color:black;">Text Content #1</p>
                                    </a>
                                </li>
                                <li style="margin-left: 10px; border-top: 1px solid gainsboro; width: 350px;">
                                    <a href="#">
                                        <h4>Title #2</h4>
                                        <p style="color:black;">Text Content #2</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="panel-body">
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-sm-3">
                <div class="card">
                    <div class="container" style="position: relative; padding-bottom: 16px;">
                        <a href="javascript:register_popup('1', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 style="position: absolute; top: 16px; right: 16px;">#</h5>
                        <h5>Class</h5>
                        <h5 style="position: absolute; top: 45px; right: 16px;">Health</h5>
                        <h5><br>Info</h5>
                    </div>
                    <img src="../img/tanis.jpg" alt="John" style="width: 100%; border-radius: 0 0 5px 5px;">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="container" style="position: relative; padding-bottom: 16px;">
                        <a href="javascript:register_popup('2', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 style="position: absolute; top: 16px; right: 16px;">#</h5>
                        <h5>Class</h5>
                        <h5 style="position: absolute; top: 45px; right: 16px;">Health</h5>
                        <h5><br>Info</h5>
                    </div>
                    <img src="../img/tanis.jpg" alt="John" style="width: 100%; border-radius: 0 0 5px 5px;">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="container" style="position: relative; padding-bottom: 16px;">
                        <a href="javascript:register_popup('3', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 style="position: absolute; top: 16px; right: 16px;">#</h5>
                        <h5>Class</h5>
                        <h5 style="position: absolute; top: 45px; right: 16px;">Health</h5>
                        <h5><br>Info</h5>
                    </div>
                    <img src="../img/tanis.jpg" alt="John" style="width: 100%; border-radius: 0 0 5px 5px;">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="container" style="position: relative; padding-bottom: 16px;">
                        <a href="javascript:register_popup('4', 'Name of Player');">
                            <h4><b>Name of Player</b></h4>
                        </a>
                        <h5 style="position: absolute; top: 16px; right: 16px;">#</h5>
                        <h5>Class</h5>
                        <h5 style="position: absolute; top: 45px; right: 16px;">Health</h5>
                        <h5><br>Info</h5>
                    </div>
                    <img src="../img/tanis.jpg" alt="John" style="width: 100%; border-radius: 0 0 5px 5px;">
                </div>
            </div>
        </div>
    </div>
</div>
