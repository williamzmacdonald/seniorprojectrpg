@extends('layouts.app')

@section('content')
<div class="pages">
    <div class="container">
        <div class ="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to {{ $room->title }}</div>
                <div class="panel-body"></div>
            </div>
        </div>
    </div>
</div>
@endsection