@extends('layouts.app')

@section('content')

    <div class="container-session">

        <h1>Waiting for {{ 2 - $user_count }} more player(s)...</h1>
        <p>This session id is</p>
        <div class="session-id">{{ $session->id }}</div>

        <script>
            setInterval(function() {
                $.ajax({
                    type: "GET",
                    url: "count/{{ $session->id }}",
                    dataType: 'json',
                    data: 'id={{ $session->id }}',
                    cache: false,
                    success: function (data) {
                        if (data >= 2) {
                            // user count met! ... sending to start page...
                            window.location.href = "{{ route('session.start', ['id' => $session->id]) }}";
                        } else {
                            // user count not met yet
                        }
                    },
                    error: function (data) {
                        console.log('error');
                    }

                });
            }, 500);
        </script>

    </div>

@endsection
