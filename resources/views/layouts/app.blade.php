<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="viewport" content="initial-scale=1, maximum-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        
    </head>
    <body>
        @include('inc.navbar')
        <div id="app">
            @yield('content')
        </div>
        @include('inc.footer')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/notes.js') }}"></script>
        <script src="{{ asset('js/combat.js') }}"></script> 
        <script src="{{ asset('js/popup.js') }}"></script>
        <script src="{{ asset('js/draganddrop.js') }}"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </body>
</html>
