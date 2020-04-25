<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<script>
    $(document).ready(function() {
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('mouseover', playButtonSound)
        });
    });

    function playButtonSound() {
        var audio = document.getElementById('sound-button');
        audio.play();
    }
</script>
<audio id="sound-button" src="{{ asset('sound/button.ogg') }}" type="audio/ogg" autostart="false"></audio>

<div id="app">
    @if (Route::has('login'))
        @auth
            <div class="top-left links">
                    <a href="{{ route('logout') }}">Quit</a>
                    <a href="{{ route('home') }}">Home</a>
            </div>
            <div class="top-right">
                <p>Logged in user: {{ Auth::user()->username }}</p>
            </div>
        @endauth
    @endif

    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
