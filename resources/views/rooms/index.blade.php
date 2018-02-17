@extends('layouts.app')

@section('content')
    <div class="container">
		<h1>Here are some game rooms!</h1>
		@foreach ($rooms as $room)
			<p>{{ $room->title }}</p>
		@endforeach
    </div>
@endsection
