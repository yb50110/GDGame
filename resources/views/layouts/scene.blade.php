@extends('layouts.app')

@section('content')

    <div class="container-scene">
        @yield('image')

        <p>@yield('prompt')</p>

        @yield('options')
    </div>

    <script>
        $(document).ready(function() {
            $('#app').append(
                '<div class="player-index">' +
                '    <div class="image-container">' +
                '        <img src="{{ $other_player->role->default_image_link }}" alt="">' +
                '    </div>' +
                '    <p>{{ $other_player->name }}</p>' +
                '</div>'
            )
        });
    </script>

@endsection
