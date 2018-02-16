<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Senior Project</title>
    </head>
    <body>
	<h1>Here are some game rooms!</h1>
	<a href = "rooms">Rooms</a>
	<a href = "about">About</a>
	<a href = "login">Login</a>
	@foreach ($rooms as $room)
		<p>{{ $room->title }}</p>
	@endforeach
    </body>
</html>
