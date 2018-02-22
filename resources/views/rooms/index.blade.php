@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4" style="width:585px;">
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading clearfix">
					<h4 class="panel-title pull-left" style="padding-top: 7.5 px">Your Game Rooms:</h4>
					<a class="btn btn-default pull-right" href="{{ url('rooms/create') }}">Create Room</a>
				</div>
				<ul class="list-group clearfix">
					<li class="list-group-item clearfix">
						<h5 class="pull-left">Game Room 1</h5>
						<a class="btn btn-default pull-right" href="rooms">View</a>
					</li>
					<li class="list-group-item clearfix">
						<h5 class="pull-left">Game Room 2</h5>
						<a class="btn btn-default pull-right" href="rooms">View</a>
					</li>
				</ul>
			</div>
		</div>
	
		<div class="col-md-4" style="width:585px;">
			<div class="panel panel-default">
				<div class="panel-heading">Game Rooms To Join:</div>
				<ul class="list-group clearfix">
						@foreach ($rooms as $room)
							<li class="list-group-item clearfix">
								<h5 class="pull-left">{{ $room->title }}</h5>
								<a href = "rooms/{{ $room->id }}" class="btn btn-default pull-right">
										Join Room
								</a>
							</li>
						@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
