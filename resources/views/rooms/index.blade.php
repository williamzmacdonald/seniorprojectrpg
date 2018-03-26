@extends('layouts.app')

@section('content')
<div class="pages background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title pull-left" style="padding-top: 7.5 px">Game Rooms:</h4>
						<a class="btn btn-default pull-right" href="rooms/create">Create Room</a>
					</div>
					<ul class="list-group clearfix">
						@foreach ($rooms as $room)
							<li class="list-group-item clearfix">
								<h5 class="pull-left">{{ $room->title }}</h5>
								<a href = "rooms/{{ $room->joinlink }}" class="btn btn-default pull-right">
									Join Room
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
