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
        <span class="glyphicon glyphicon-plus" aria-hidden="true" onclick="openNav()" style="margin-bottom: 10px; font-size: 24px; cursor: pointer;"></span>
    </div>
    <div class="container" id="appendArea" style="height: 600px; margin: auto;" ondrop="drop(event, this)" ondragover="allowDrop(event)">
        <span id="add" style="font-size:30px; color: black; line-height: 600px; margin-left: 425px; font-family: 'Assassin'; text-transform: uppercase;">Add Content Here</span>
        <!--<button onclick="javascrip:appendNPC();">Clone all #drag-1 elements, and append them to the .container element</button>-->
    </div>
</div>

<div class="card" id="npc" style="margin-right: 15px; display: none;">
    <div class="container" style="position: relative; padding-bottom: 16px;">
        <a href="javascript:register_popup('1', 'Name of Player');">
            <h4 style="color: red;"><b>Name of Player</b></h4>
        </a>
        <h5 style="position: absolute; top: 16px; right: 16px;">#</h5>
        <h5>Class</h5>
        <h5 style="position: absolute; top: 45px; right: 16px;">Health</h5>
        <h5><br>Info</h5>
    </div>
    <img src="../img/tanis.jpg" alt="John" style="width: 180px; border-radius: 0 0 5px 5px;">
</div>

<!-- Notes Section -->
<div class="card col-sm-3" id="notes" style="height:447px; width: 430px; display: none;">
    <div class="panel-heading" style="font-family: 'Assassin'; text-transform: uppercase; font-size: 22px;">Notes</div>
    <a href="javascript:addnew();" role="button" class="btn btn-primary" id="add_new"><span>&#43;</span></a>
    <div id="note" style="display: none;">
        <div class="form-group">
            <input type="text" class="form-control" id="title" name ="title" placeholder="Title"></input>
        </div>
        <div class="form-group">
            <textarea class="form-control" id="area" rows="10" cols="50" placeholder="Description"></textarea>
        </div>
        <button onclick="javascript:save();" type="submit" class="btn btn-success" style="color: white; margin-top: 10px;">Save</button>
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
</div>