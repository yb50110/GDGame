@extends('layouts.app')

@section('content')

    <div class="container-session">
        <img src="/images/0-hourglass.jpg">
        <h1>Waiting for other player...</h1>

        <script>
            setInterval(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('session.role_check', ['session_id' => $session_id]) }}",
                    dataType: 'text',
                    data: 'session_id={{ $session_id }}',
                    cache: false,
                    success: function (data) {
                        if (data !== 'false') {
                            // returning false means there's a user who hasn't selected yet
                            // so if it is anything BUT false, then everyone has selected
                            window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 1]) }}";
                        }
                    },
                    error: function (data) {
                        console.log('error');
                    }
                })
            }, 500);
        </script>

    </div>

@endsection
