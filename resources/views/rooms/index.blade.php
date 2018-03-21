@extends('layouts.app')

@section('content')
<div class="pages">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">Game Rooms To Join:</div>
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
