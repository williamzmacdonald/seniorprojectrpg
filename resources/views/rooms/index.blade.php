@extends('layouts.app')

@section('content')
    <div class="container">
		<h1>Here are some game rooms!</h1>
		<form class="form-horizontal" method="POST" action="joinroom">
		@foreach ($rooms as $room)
		
			<h2>{{ $room->title }} 
				<button type="submit" name = " {{ $room->id }} " class="btn btn-primary">
					Join Room
                </button>
			</h2>
		@endforeach
		</form>
		<a class="btn btn-primary" href="createroom">Create Room</a>
    </div>
@endsection
