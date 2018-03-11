@extends('layouts.app')

@section('content')
<div class="pages room">
    <div class="container">
        <div class ="avatar border">
            <h4>Name</h4>
            <h6>#</h6>
            <h5>Health</h5>
        </div>
        <div class="panel panel-default panel-inform border parch">
            <div class="panel-heading parch">Specific Info</div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="panel panel-default panel-inform border parch">
            <div class="panel-heading parch">Status Effects</div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="clearfix"></div>
                    
        <!--For loop through each player that exists in the game room-->
        <div style="width: 250px; height: 80px; float: left;">
            Initiative:
            <div class="media parch border">
                <div class="media-left">
                    <div class="frame-square">
                        <img class="media-object" src="../img/avatar.jpg"/>
                    </div>
                </div>
                <!-- Pass username and display name to register popup -->
                <div class="media-body">
                    <!--id of user, name of user-->
                    <a href="javascript:register_popup('1', 'Name of Player');">            
                        <h5 class="media-heading" style="float: left;">Name of Player</h5>
                    </a>
                    <h5 style="float: right;">#</h5>
                    <h5 class="clearfix">Info<h5>
                    <h6>Health</h6>
                </div>
                
            </div>
            <div class="media parch border">
                <div class="media-left">
                    <div class="frame-square">
                        <img class="media-object" src="../img/avatar.jpg"/>
                    </div>
                </div>
                <div class="media-body">
                    <!--id of user, name of user-->
                    <a href="javascript:register_popup('2', 'Name of Player');">            
                        <h5 class="media-heading" style="float: left;">Name of Player</h5>
                    </a>
                    <h5 style="float: right;">#</h5>
                    <h5 class="clearfix">Info<h5>
                    <h6>Health</h6>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default panel-inform border parch" style="float: left;">
            <div class="panel-heading parch">Notes</div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
            <div class="panel panel-default panel-inform border parch" style="float: left;">
                <div class="panel-heading parch">Messaging</div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
